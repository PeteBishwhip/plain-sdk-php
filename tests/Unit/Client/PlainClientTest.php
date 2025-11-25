<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\Client;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\Request as Psr7Request;
use GuzzleHttp\Psr7\Response as Psr7Response;
use Http\Mock\Client as MockClient;
use PHPUnit\Framework\TestCase;
use Plain\Auth\ApiKey;
use Plain\Client\Config;
use Plain\Client\PlainClient;
use Plain\Exceptions\AuthenticationException;
use Plain\Exceptions\NetworkException;
use Plain\Exceptions\RateLimitException;
use Plain\Exceptions\ServerException;

class PlainClientTest extends TestCase
{
    private MockClient $mockHttpClient;
    private Config $config;
    private PlainClient $client;

    protected function setUp(): void
    {
        $this->mockHttpClient = new MockClient();

        $this->config = new Config(
            apiKey: ApiKey::from('pk_test_1234567890abcdefghij'),
            httpClient: $this->mockHttpClient,
        );

        $this->client = new PlainClient($this->config);
    }

    public function test_executes_graphql_query_successfully(): void
    {
        $responseData = [
            'data' => [
                'customer' => [
                    'id' => 'c_123',
                    'email' => 'test@example.com',
                ],
            ],
        ];

        $this->mockHttpClient->addResponse(
            new Psr7Response(200, [], json_encode($responseData))
        );

        $response = $this->client->execute('query { customer { id email } }');

        $this->assertEquals($responseData['data'], $response->getData());
        $this->assertFalse($response->hasErrors());

        // Verify request was made correctly
        $request = $this->mockHttpClient->getLastRequest();
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('https://core-api.uk.plain.com/graphql/v1', (string) $request->getUri());
        $this->assertEquals('application/json', $request->getHeaderLine('Content-Type'));
        $this->assertEquals('Bearer pk_test_1234567890abcdefghij', $request->getHeaderLine('Authorization'));
    }

    public function test_executes_query_with_variables(): void
    {
        $this->mockHttpClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => ['customer' => null]]))
        );

        $variables = ['customerId' => 'c_123'];
        $this->client->execute('query($customerId: ID!) { customer(id: $customerId) { id } }', $variables);

        $request = $this->mockHttpClient->getLastRequest();
        $body = json_decode((string) $request->getBody(), true);

        $this->assertEquals($variables, $body['variables']);
    }

    public function test_throws_authentication_exception_on_401(): void
    {
        $this->mockHttpClient->addResponse(
            new Psr7Response(401, [], 'Unauthorized')
        );

        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage('Authentication failed');

        $this->client->execute('query { customer { id } }');
    }

    public function test_throws_rate_limit_exception_on_429(): void
    {
        $this->mockHttpClient->addResponse(
            new Psr7Response(429, ['Retry-After' => '60'], 'Rate limit exceeded')
        );

        try {
            $this->client->execute('query { customer { id } }');
            $this->fail('Expected RateLimitException to be thrown');
        } catch (RateLimitException $e) {
            $this->assertEquals(60, $e->getRetryAfter());
            $this->assertEquals(429, $e->getCode());
        }
    }

    public function test_throws_server_exception_on_500(): void
    {
        $this->mockHttpClient->addResponse(
            new Psr7Response(500, [], 'Internal Server Error')
        );

        $this->expectException(ServerException::class);
        $this->expectExceptionMessage('Plain API server error');

        $this->client->execute('query { customer { id } }');
    }

    public function test_retries_on_connection_failure(): void
    {
        $config = new Config(
            apiKey: ApiKey::from('pk_test_1234567890abcdefghij'),
            httpClient: $this->mockHttpClient,
            retryAttempts: 2,
        );
        $client = new PlainClient($config);

        // First two attempts fail, third succeeds
        $this->mockHttpClient->addException(
            new ConnectException('Connection failed', new Psr7Request('POST', '/'))
        );
        $this->mockHttpClient->addException(
            new ConnectException('Connection failed', new Psr7Request('POST', '/'))
        );
        $this->mockHttpClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => ['customer' => null]]))
        );

        $response = $client->execute('query { customer { id } }');

        $this->assertFalse($response->hasErrors());
    }

    public function test_throws_network_exception_after_max_retries(): void
    {
        $config = new Config(
            apiKey: ApiKey::from('pk_test_1234567890abcdefghij'),
            httpClient: $this->mockHttpClient,
            retryAttempts: 1,
        );
        $client = new PlainClient($config);

        // Both attempts fail
        $this->mockHttpClient->addException(
            new ConnectException('Connection failed', new Psr7Request('POST', '/'))
        );
        $this->mockHttpClient->addException(
            new ConnectException('Connection failed', new Psr7Request('POST', '/'))
        );

        $this->expectException(NetworkException::class);
        $this->expectExceptionMessage('Failed to connect to Plain API');

        $client->execute('query { customer { id } }');
    }

    public function test_handles_graphql_errors_in_response(): void
    {
        $responseData = [
            'data' => null,
            'errors' => [
                ['message' => 'Field not found', 'path' => ['customer']],
            ],
        ];

        $this->mockHttpClient->addResponse(
            new Psr7Response(200, [], json_encode($responseData))
        );

        $response = $this->client->execute('query { customer { id } }');

        $this->assertTrue($response->hasErrors());
        $this->assertEquals($responseData['errors'], $response->getErrors());
    }

    public function test_parses_retry_after_as_timestamp(): void
    {
        $futureTime = time() + 120;
        $this->mockHttpClient->addResponse(
            new Psr7Response(429, ['Retry-After' => gmdate('D, d M Y H:i:s \G\M\T', $futureTime)], '')
        );

        try {
            $this->client->execute('query { customer { id } }');
            $this->fail('Expected RateLimitException to be thrown');
        } catch (RateLimitException $e) {
            // Should be approximately 120 seconds, give or take a few for test execution time
            $this->assertGreaterThanOrEqual(119, $e->getRetryAfter());
            $this->assertLessThanOrEqual(121, $e->getRetryAfter());
        }
    }

    public function test_retry_after_defaults_to_null_if_header_missing(): void
    {
        $this->mockHttpClient->addResponse(
            new Psr7Response(429, [], 'Rate limit exceeded')
        );

        try {
            $this->client->execute('query { customer { id } }');
            $this->fail('Expected RateLimitException to be thrown');
        } catch (RateLimitException $e) {
            $this->assertNull($e->getRetryAfter());
        }
    }

    public function test_get_config_returns_config(): void
    {
        $this->assertSame($this->config, $this->client->getConfig());
    }

    public function test_uses_custom_base_url(): void
    {
        $config = new Config(
            apiKey: ApiKey::from('pk_test_1234567890abcdefghij'),
            baseUrl: 'https://custom.example.com/graphql',
            httpClient: $this->mockHttpClient,
        );
        $client = new PlainClient($config);

        $this->mockHttpClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => null]))
        );

        $client->execute('query { customer { id } }');

        $request = $this->mockHttpClient->getLastRequest();
        $this->assertEquals('https://custom.example.com/graphql', (string) $request->getUri());
    }

    public function test_request_includes_accept_header(): void
    {
        $this->mockHttpClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => null]))
        );

        $this->client->execute('query { customer { id } }');

        $request = $this->mockHttpClient->getLastRequest();
        $this->assertEquals('application/json', $request->getHeaderLine('Accept'));
    }

    public function test_request_body_is_valid_json(): void
    {
        $this->mockHttpClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => null]))
        );

        $query = 'query { customer { id } }';
        $variables = ['id' => 'c_123'];
        $this->client->execute($query, $variables);

        $request = $this->mockHttpClient->getLastRequest();
        $body = json_decode((string) $request->getBody(), true);

        $this->assertEquals($query, $body['query']);
        $this->assertEquals($variables, $body['variables']);
    }
}
