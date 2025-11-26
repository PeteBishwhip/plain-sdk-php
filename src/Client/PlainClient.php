<?php

declare(strict_types=1);

namespace Plain\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Plain\Exceptions\AuthenticationException;
use Plain\Exceptions\NetworkException;
use Plain\Exceptions\RateLimitException;
use Plain\Exceptions\ServerException;
use Plain\Response\Response;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * HTTP client for the Plain GraphQL API.
 */
final class PlainClient
{
    private readonly ClientInterface $httpClient;

    public function __construct(
        private readonly Config $config,
    ) {
        $this->httpClient = $config->getHttpClient() ?? new Client([
            'timeout' => $config->getTimeout(),
        ]);
    }

    /**
     * Execute a GraphQL query or mutation.
     *
     * @param array<string, mixed> $variables
     * @throws AuthenticationException
     * @throws RateLimitException
     * @throws ServerException
     * @throws NetworkException
     */
    public function execute(string $query, array $variables = []): Response
    {
        $request = $this->createRequest($query, $variables);

        $response = $this->sendWithRetry($request);

        return $this->parseResponse($response);
    }

    /**
     * Create a GraphQL request.
     *
     * @param array<string, mixed> $variables
     */
    private function createRequest(string $query, array $variables): RequestInterface
    {
        $body = json_encode([
            'query' => $query,
            'variables' => $variables,
        ], JSON_THROW_ON_ERROR);

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->config->getApiKey()->toString(),
            'Accept' => 'application/json',
        ];

        return new Request(
            'POST',
            $this->config->getBaseUrl(),
            $headers,
            $body
        );
    }

    /**
     * Send a request with retry logic.
     *
     * @throws AuthenticationException
     * @throws RateLimitException
     * @throws ServerException
     * @throws NetworkException
     */
    private function sendWithRetry(RequestInterface $request): ResponseInterface
    {
        $attempt = 0;
        $maxAttempts = $this->config->getRetryAttempts() + 1;

        while ($attempt < $maxAttempts) {
            try {
                $this->log('debug', 'Sending request to Plain API', [
                    'attempt' => $attempt + 1,
                    'max_attempts' => $maxAttempts,
                ]);

                $response = $this->httpClient->sendRequest($request);

                $this->handleErrorStatusCode($response);

                return $response;
            } catch (ConnectException $e) {
                $attempt++;

                if ($attempt >= $maxAttempts) {
                    $this->log('error', 'Network error after all retry attempts', [
                        'exception' => $e->getMessage(),
                    ]);

                    throw new NetworkException(
                        'Failed to connect to Plain API: ' . $e->getMessage(),
                        (int) $e->getCode(),
                        $e
                    );
                }

                $this->log('warning', 'Network error, retrying', [
                    'attempt' => $attempt,
                    'exception' => $e->getMessage(),
                ]);

                // Exponential backoff
                usleep((int) (pow(2, $attempt - 1) * 100000)); // 100ms, 200ms, 400ms, etc.
            } catch (RequestException $e) {
                // For other request exceptions, don't retry
                $response = $e->getResponse();

                if ($response !== null) {
                    $this->handleErrorStatusCode($response);
                }

                throw new NetworkException(
                    'Request failed: ' . $e->getMessage(),
                    (int) $e->getCode(),
                    $e
                );
            }
        }

        throw new NetworkException('Failed to send request after all retry attempts');
    }

    /**
     * Handle error status codes.
     *
     * @throws AuthenticationException
     * @throws RateLimitException
     * @throws ServerException
     */
    private function handleErrorStatusCode(ResponseInterface $response): void
    {
        $statusCode = $response->getStatusCode();

        if ($statusCode >= 200 && $statusCode < 300) {
            return; // Success
        }

        $body = (string) $response->getBody();

        match (true) {
            $statusCode === 401 => throw new AuthenticationException(
                'Authentication failed. Please check your API key.',
                $statusCode
            ),
            $statusCode === 429 => throw new RateLimitException(
                'Rate limit exceeded. Please retry after some time.',
                $this->extractRetryAfter($response),
                $statusCode
            ),
            $statusCode >= 500 => throw new ServerException(
                'Plain API server error: ' . $body,
                $statusCode
            ),
            default => throw new ServerException(
                'Unexpected response status ' . $statusCode . ': ' . $body,
                $statusCode
            ),
        };
    }

    /**
     * Extract retry-after header value.
     */
    private function extractRetryAfter(ResponseInterface $response): ?int
    {
        $retryAfterHeader = $response->getHeader('Retry-After');

        if (empty($retryAfterHeader)) {
            return null;
        }

        $value = $retryAfterHeader[0];

        if (is_numeric($value)) {
            return (int) $value;
        }

        // Try to parse as HTTP date
        $timestamp = strtotime($value);

        if ($timestamp !== false) {
            return max(0, $timestamp - time());
        }

        return null;
    }

    /**
     * Parse the HTTP response into a Response object.
     */
    private function parseResponse(ResponseInterface $httpResponse): Response
    {
        $body = (string) $httpResponse->getBody();

        $this->log('debug', 'Received response from Plain API', [
            'status_code' => $httpResponse->getStatusCode(),
            'body_length' => strlen($body),
        ]);

        return Response::fromJson($body);
    }

    /**
     * Log a message if a logger is configured.
     *
     * @param array<string, mixed> $context
     */
    private function log(string $level, string $message, array $context = []): void
    {
        $logger = $this->config->getLogger();

        if ($logger !== null) {
            $logger->log($level, $message, $context);
        }
    }

    /**
     * Get the configuration.
     */
    public function getConfig(): Config
    {
        return $this->config;
    }
}
