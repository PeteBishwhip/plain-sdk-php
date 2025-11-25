<?php

declare(strict_types=1);

namespace Plain\Tests\Unit;

use GuzzleHttp\Psr7\Response as Psr7Response;
use Http\Mock\Client as MockClient;
use PHPUnit\Framework\TestCase;
use Plain\Auth\ApiKey;
use Plain\Client\Config;
use Plain\PlainSDK;
use Plain\QueryBuilder\Field;
use Plain\QueryBuilder\MutationBuilder;
use Plain\QueryBuilder\QueryBuilder;
use Plain\QueryBuilder\Variable;

class PlainSDKTest extends TestCase
{
    public function test_creates_sdk_from_array(): void
    {
        $sdk = new PlainSDK([
            'api_key' => 'pk_test_1234567890abcdefghij',
        ]);

        $this->assertInstanceOf(PlainSDK::class, $sdk);
        $this->assertTrue($sdk->getApiKey()->isTest());
    }

    public function test_creates_sdk_from_config(): void
    {
        $config = new Config(ApiKey::from('pk_test_1234567890abcdefghij'));
        $sdk = new PlainSDK($config);

        $this->assertInstanceOf(PlainSDK::class, $sdk);
        $this->assertSame($config, $sdk->getConfig());
    }

    public function test_execute_delegates_to_client(): void
    {
        $mockClient = new MockClient();
        $mockClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => ['customer' => ['id' => 'c_123']]]))
        );

        $config = new Config(
            ApiKey::from('pk_test_1234567890abcdefghij'),
            httpClient: $mockClient
        );
        $sdk = new PlainSDK($config);

        $response = $sdk->execute('query { customer { id } }');

        $this->assertEquals(['customer' => ['id' => 'c_123']], $response->getData());
    }

    public function test_get_client_returns_client(): void
    {
        $sdk = new PlainSDK(['api_key' => 'pk_test_1234567890abcdefghij']);

        $this->assertInstanceOf(\Plain\Client\PlainClient::class, $sdk->getClient());
    }

    public function test_get_config_returns_config(): void
    {
        $sdk = new PlainSDK(['api_key' => 'pk_test_1234567890abcdefghij']);

        $this->assertInstanceOf(Config::class, $sdk->getConfig());
    }

    public function test_get_api_key_returns_api_key(): void
    {
        $sdk = new PlainSDK(['api_key' => 'pk_test_1234567890abcdefghij']);

        $this->assertInstanceOf(ApiKey::class, $sdk->getApiKey());
        $this->assertEquals('pk_test_1234567890abcdefghij', $sdk->getApiKey()->toString());
    }

    public function test_execute_with_variables(): void
    {
        $mockClient = new MockClient();
        $mockClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => ['customer' => null]]))
        );

        $config = new Config(
            ApiKey::from('pk_test_1234567890abcdefghij'),
            httpClient: $mockClient
        );
        $sdk = new PlainSDK($config);

        $variables = ['customerId' => 'c_123'];
        $response = $sdk->execute('query($customerId: ID!) { customer(id: $customerId) { id } }', $variables);

        $this->assertFalse($response->hasErrors());

        // Verify request
        $request = $mockClient->getLastRequest();
        $body = json_decode((string) $request->getBody(), true);
        $this->assertEquals($variables, $body['variables']);
    }

    public function test_execute_with_query_builder(): void
    {
        $mockClient = new MockClient();
        $mockClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => ['customer' => ['id' => 'c_123']]]))
        );

        $config = new Config(
            ApiKey::from('pk_test_1234567890abcdefghij'),
            httpClient: $mockClient
        );
        $sdk = new PlainSDK($config);

        $query = QueryBuilder::create('GetCustomer')
            ->variable(Variable::create('id', 'ID!'))
            ->field(
                Field::create('customer')
                    ->argument('customerId', '$id')
                    ->selectMany(['id', 'email'])
            );

        $response = $sdk->execute($query, ['id' => 'c_123']);

        $this->assertEquals(['customer' => ['id' => 'c_123']], $response->getData());

        // Verify the built query was sent
        $request = $mockClient->getLastRequest();
        $body = json_decode((string) $request->getBody(), true);
        $this->assertStringContainsString('query GetCustomer', $body['query']);
        $this->assertEquals(['id' => 'c_123'], $body['variables']);
    }

    public function test_execute_with_mutation_builder(): void
    {
        $mockClient = new MockClient();
        $mockClient->addResponse(
            new Psr7Response(200, [], json_encode(['data' => ['createCustomer' => ['id' => 'c_new']]]))
        );

        $config = new Config(
            ApiKey::from('pk_test_1234567890abcdefghij'),
            httpClient: $mockClient
        );
        $sdk = new PlainSDK($config);

        $mutation = MutationBuilder::create('CreateCustomer')
            ->variable(Variable::create('input', 'CreateCustomerInput!'))
            ->field(
                Field::create('createCustomer')
                    ->argument('input', '$input')
                    ->selectMany(['id', 'email'])
            );

        $response = $sdk->execute($mutation, ['input' => ['email' => 'test@example.com']]);

        $this->assertEquals(['createCustomer' => ['id' => 'c_new']], $response->getData());

        // Verify the built mutation was sent
        $request = $mockClient->getLastRequest();
        $body = json_decode((string) $request->getBody(), true);
        $this->assertStringContainsString('mutation CreateCustomer', $body['query']);
    }

    public function test_query_method_returns_query_builder(): void
    {
        $sdk = new PlainSDK(['api_key' => 'pk_test_1234567890abcdefghij']);

        $builder = $sdk->query('TestQuery');

        $this->assertInstanceOf(QueryBuilder::class, $builder);
        $this->assertEquals('TestQuery', $builder->getOperationName());
    }

    public function test_mutation_method_returns_mutation_builder(): void
    {
        $sdk = new PlainSDK(['api_key' => 'pk_test_1234567890abcdefghij']);

        $builder = $sdk->mutation('TestMutation');

        $this->assertInstanceOf(MutationBuilder::class, $builder);
        $this->assertEquals('TestMutation', $builder->getOperationName());
    }
}
