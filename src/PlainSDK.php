<?php

declare(strict_types=1);

namespace Plain;

use Plain\Auth\ApiKey;
use Plain\Client\Config;
use Plain\Client\PlainClient;
use Plain\QueryBuilder\MutationBuilder;
use Plain\QueryBuilder\QueryBuilder;
use Plain\Response\Response;

/**
 * Main entry point for the Plain SDK.
 *
 * @example
 * ```php
 * $sdk = new PlainSDK(['api_key' => 'pk_test_...']);
 * $response = $sdk->execute('query { customer(customerId: "c_123") { id email } }');
 * ```
 */
final class PlainSDK
{
    private readonly PlainClient $client;

    /**
     * Create a new Plain SDK instance.
     *
     * @param array{
     *     api_key: string,
     *     base_url?: string,
     *     timeout?: int,
     *     retry_attempts?: int,
     *     http_client?: \Psr\Http\Client\ClientInterface|null,
     *     logger?: \Psr\Log\LoggerInterface|null
     * }|Config $config
     */
    public function __construct(array|Config $config)
    {
        $configObject = is_array($config) ? Config::fromArray($config) : $config;
        $this->client = new PlainClient($configObject);
    }

    /**
     * Execute a GraphQL query or mutation.
     *
     * @param string|QueryBuilder|MutationBuilder $query
     * @param array<string, mixed> $variables
     * @throws \Plain\Exceptions\AuthenticationException
     * @throws \Plain\Exceptions\RateLimitException
     * @throws \Plain\Exceptions\ServerException
     * @throws \Plain\Exceptions\NetworkException
     */
    public function execute(string|QueryBuilder|MutationBuilder $query, array $variables = []): Response
    {
        if ($query instanceof QueryBuilder || $query instanceof MutationBuilder) {
            $queryString = $query->build();
        } else {
            $queryString = $query;
        }

        return $this->client->execute($queryString, $variables);
    }

    /**
     * Create a new query builder.
     */
    public function query(?string $operationName = null): QueryBuilder
    {
        return QueryBuilder::create($operationName);
    }

    /**
     * Create a new mutation builder.
     */
    public function mutation(?string $operationName = null): MutationBuilder
    {
        return MutationBuilder::create($operationName);
    }

    /**
     * Get the underlying HTTP client.
     */
    public function getClient(): PlainClient
    {
        return $this->client;
    }

    /**
     * Get the configuration.
     */
    public function getConfig(): Config
    {
        return $this->client->getConfig();
    }

    /**
     * Get the API key.
     */
    public function getApiKey(): ApiKey
    {
        return $this->client->getConfig()->getApiKey();
    }
}
