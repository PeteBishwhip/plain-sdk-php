<?php

declare(strict_types=1);

namespace Plain\Client;

use Plain\Auth\ApiKey;
use Plain\Exceptions\PlainException;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;

/**
 * Configuration for the Plain API client.
 */
final class Config
{
    private const DEFAULT_BASE_URL = 'https://core-api.uk.plain.com/graphql/v1';
    private const DEFAULT_TIMEOUT = 30;
    private const DEFAULT_RETRY_ATTEMPTS = 3;

    public function __construct(
        private readonly ApiKey $apiKey,
        private readonly string $baseUrl = self::DEFAULT_BASE_URL,
        private readonly int $timeout = self::DEFAULT_TIMEOUT,
        private readonly int $retryAttempts = self::DEFAULT_RETRY_ATTEMPTS,
        private readonly ?ClientInterface $httpClient = null,
        private readonly ?LoggerInterface $logger = null,
    ) {
        $this->validate();
    }

    /**
     * Create configuration from an array.
     *
     * @param array{
     *     api_key: string,
     *     base_url?: string,
     *     timeout?: int,
     *     retry_attempts?: int,
     *     http_client?: ClientInterface|null,
     *     logger?: LoggerInterface|null
     * } $config
     */
    public static function fromArray(array $config): self
    {
        if (!isset($config['api_key'])) {
            throw new PlainException('API key is required in configuration');
        }

        return new self(
            apiKey: ApiKey::from($config['api_key']),
            baseUrl: $config['base_url'] ?? self::DEFAULT_BASE_URL,
            timeout: $config['timeout'] ?? self::DEFAULT_TIMEOUT,
            retryAttempts: $config['retry_attempts'] ?? self::DEFAULT_RETRY_ATTEMPTS,
            httpClient: $config['http_client'] ?? null,
            logger: $config['logger'] ?? null,
        );
    }

    /**
     * Validate the configuration.
     *
     * @throws PlainException If configuration is invalid
     */
    private function validate(): void
    {
        if ($this->timeout < 1) {
            throw new PlainException('Timeout must be at least 1 second');
        }

        if ($this->retryAttempts < 0) {
            throw new PlainException('Retry attempts cannot be negative');
        }

        if (empty($this->baseUrl)) {
            throw new PlainException('Base URL cannot be empty');
        }

        if (!filter_var($this->baseUrl, FILTER_VALIDATE_URL)) {
            throw new PlainException('Base URL must be a valid URL');
        }
    }

    public function getApiKey(): ApiKey
    {
        return $this->apiKey;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function getRetryAttempts(): int
    {
        return $this->retryAttempts;
    }

    public function getHttpClient(): ?ClientInterface
    {
        return $this->httpClient;
    }

    public function getLogger(): ?LoggerInterface
    {
        return $this->logger;
    }

    /**
     * Create a new config with different API key.
     */
    public function withApiKey(ApiKey $apiKey): self
    {
        return new self(
            apiKey: $apiKey,
            baseUrl: $this->baseUrl,
            timeout: $this->timeout,
            retryAttempts: $this->retryAttempts,
            httpClient: $this->httpClient,
            logger: $this->logger,
        );
    }

    /**
     * Create a new config with different base URL.
     */
    public function withBaseUrl(string $baseUrl): self
    {
        return new self(
            apiKey: $this->apiKey,
            baseUrl: $baseUrl,
            timeout: $this->timeout,
            retryAttempts: $this->retryAttempts,
            httpClient: $this->httpClient,
            logger: $this->logger,
        );
    }

    /**
     * Create a new config with different timeout.
     */
    public function withTimeout(int $timeout): self
    {
        return new self(
            apiKey: $this->apiKey,
            baseUrl: $this->baseUrl,
            timeout: $timeout,
            retryAttempts: $this->retryAttempts,
            httpClient: $this->httpClient,
            logger: $this->logger,
        );
    }

    /**
     * Create a new config with different retry attempts.
     */
    public function withRetryAttempts(int $retryAttempts): self
    {
        return new self(
            apiKey: $this->apiKey,
            baseUrl: $this->baseUrl,
            timeout: $this->timeout,
            retryAttempts: $retryAttempts,
            httpClient: $this->httpClient,
            logger: $this->logger,
        );
    }

    /**
     * Create a new config with different HTTP client.
     */
    public function withHttpClient(?ClientInterface $httpClient): self
    {
        return new self(
            apiKey: $this->apiKey,
            baseUrl: $this->baseUrl,
            timeout: $this->timeout,
            retryAttempts: $this->retryAttempts,
            httpClient: $httpClient,
            logger: $this->logger,
        );
    }

    /**
     * Create a new config with different logger.
     */
    public function withLogger(?LoggerInterface $logger): self
    {
        return new self(
            apiKey: $this->apiKey,
            baseUrl: $this->baseUrl,
            timeout: $this->timeout,
            retryAttempts: $this->retryAttempts,
            httpClient: $this->httpClient,
            logger: $logger,
        );
    }
}
