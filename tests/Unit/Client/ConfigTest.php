<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\Client;

use PHPUnit\Framework\TestCase;
use Plain\Auth\ApiKey;
use Plain\Client\Config;
use Plain\Exceptions\PlainException;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;

class ConfigTest extends TestCase
{
    private ApiKey $apiKey;

    protected function setUp(): void
    {
        $this->apiKey = ApiKey::from('pk_test_1234567890abcdefghij');
    }

    public function test_creates_config_with_defaults(): void
    {
        $config = new Config($this->apiKey);

        $this->assertSame($this->apiKey, $config->getApiKey());
        $this->assertEquals('https://core-api.uk.plain.com/graphql/v1', $config->getBaseUrl());
        $this->assertEquals(30, $config->getTimeout());
        $this->assertEquals(3, $config->getRetryAttempts());
        $this->assertNull($config->getHttpClient());
        $this->assertNull($config->getLogger());
    }

    public function test_creates_config_with_custom_values(): void
    {
        $httpClient = $this->createMock(ClientInterface::class);
        $logger = $this->createMock(LoggerInterface::class);

        $config = new Config(
            apiKey: $this->apiKey,
            baseUrl: 'https://custom.example.com',
            timeout: 60,
            retryAttempts: 5,
            httpClient: $httpClient,
            logger: $logger,
        );

        $this->assertEquals('https://custom.example.com', $config->getBaseUrl());
        $this->assertEquals(60, $config->getTimeout());
        $this->assertEquals(5, $config->getRetryAttempts());
        $this->assertSame($httpClient, $config->getHttpClient());
        $this->assertSame($logger, $config->getLogger());
    }

    public function test_creates_config_from_array(): void
    {
        $config = Config::fromArray([
            'api_key' => 'pk_test_1234567890abcdefghij',
            'base_url' => 'https://custom.example.com',
            'timeout' => 45,
            'retry_attempts' => 2,
        ]);

        $this->assertTrue($config->getApiKey()->isTest());
        $this->assertEquals('https://custom.example.com', $config->getBaseUrl());
        $this->assertEquals(45, $config->getTimeout());
        $this->assertEquals(2, $config->getRetryAttempts());
    }

    public function test_from_array_throws_on_missing_api_key(): void
    {
        $this->expectException(PlainException::class);
        $this->expectExceptionMessage('API key is required in configuration');

        Config::fromArray([]);
    }

    public function test_throws_on_invalid_timeout(): void
    {
        $this->expectException(PlainException::class);
        $this->expectExceptionMessage('Timeout must be at least 1 second');

        new Config($this->apiKey, timeout: 0);
    }

    public function test_throws_on_negative_retry_attempts(): void
    {
        $this->expectException(PlainException::class);
        $this->expectExceptionMessage('Retry attempts cannot be negative');

        new Config($this->apiKey, retryAttempts: -1);
    }

    public function test_throws_on_empty_base_url(): void
    {
        $this->expectException(PlainException::class);
        $this->expectExceptionMessage('Base URL cannot be empty');

        new Config($this->apiKey, baseUrl: '');
    }

    public function test_throws_on_invalid_base_url(): void
    {
        $this->expectException(PlainException::class);
        $this->expectExceptionMessage('Base URL must be a valid URL');

        new Config($this->apiKey, baseUrl: 'not-a-url');
    }

    public function test_with_api_key_returns_new_instance(): void
    {
        $config1 = new Config($this->apiKey);
        $newApiKey = ApiKey::from('pk_live_1234567890abcdefghij');
        $config2 = $config1->withApiKey($newApiKey);

        $this->assertNotSame($config1, $config2);
        $this->assertSame($this->apiKey, $config1->getApiKey());
        $this->assertSame($newApiKey, $config2->getApiKey());
    }

    public function test_with_base_url_returns_new_instance(): void
    {
        $config1 = new Config($this->apiKey);
        $config2 = $config1->withBaseUrl('https://new.example.com');

        $this->assertNotSame($config1, $config2);
        $this->assertEquals('https://core-api.uk.plain.com/graphql/v1', $config1->getBaseUrl());
        $this->assertEquals('https://new.example.com', $config2->getBaseUrl());
    }

    public function test_with_timeout_returns_new_instance(): void
    {
        $config1 = new Config($this->apiKey);
        $config2 = $config1->withTimeout(60);

        $this->assertNotSame($config1, $config2);
        $this->assertEquals(30, $config1->getTimeout());
        $this->assertEquals(60, $config2->getTimeout());
    }

    public function test_with_retry_attempts_returns_new_instance(): void
    {
        $config1 = new Config($this->apiKey);
        $config2 = $config1->withRetryAttempts(5);

        $this->assertNotSame($config1, $config2);
        $this->assertEquals(3, $config1->getRetryAttempts());
        $this->assertEquals(5, $config2->getRetryAttempts());
    }

    public function test_with_http_client_returns_new_instance(): void
    {
        $config1 = new Config($this->apiKey);
        $httpClient = $this->createMock(ClientInterface::class);
        $config2 = $config1->withHttpClient($httpClient);

        $this->assertNotSame($config1, $config2);
        $this->assertNull($config1->getHttpClient());
        $this->assertSame($httpClient, $config2->getHttpClient());
    }

    public function test_with_logger_returns_new_instance(): void
    {
        $config1 = new Config($this->apiKey);
        $logger = $this->createMock(LoggerInterface::class);
        $config2 = $config1->withLogger($logger);

        $this->assertNotSame($config1, $config2);
        $this->assertNull($config1->getLogger());
        $this->assertSame($logger, $config2->getLogger());
    }

    public function test_allows_zero_retry_attempts(): void
    {
        $config = new Config($this->apiKey, retryAttempts: 0);

        $this->assertEquals(0, $config->getRetryAttempts());
    }
}
