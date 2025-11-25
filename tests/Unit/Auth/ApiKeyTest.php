<?php

declare(strict_types=1);

namespace Plain\Tests\Unit\Auth;

use PHPUnit\Framework\TestCase;
use Plain\Auth\ApiKey;
use Plain\Exceptions\AuthenticationException;

class ApiKeyTest extends TestCase
{
    public function test_creates_live_api_key(): void
    {
        $key = ApiKey::from('pk_live_1234567890abcdefghij');

        $this->assertTrue($key->isLive());
        $this->assertFalse($key->isTest());
        $this->assertEquals('live', $key->getEnvironment());
        $this->assertEquals('pk_live_1234567890abcdefghij', $key->toString());
        $this->assertEquals('pk_live_1234567890abcdefghij', (string) $key);
    }

    public function test_creates_test_api_key(): void
    {
        $key = ApiKey::from('pk_test_1234567890abcdefghij');

        $this->assertTrue($key->isTest());
        $this->assertFalse($key->isLive());
        $this->assertEquals('test', $key->getEnvironment());
        $this->assertEquals('pk_test_1234567890abcdefghij', $key->toString());
    }

    public function test_throws_on_empty_key(): void
    {
        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage('API key cannot be empty');

        ApiKey::from('');
    }

    public function test_throws_on_short_key(): void
    {
        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage('API key must be at least 20 characters long');

        ApiKey::from('pk_live_short');
    }

    public function test_throws_on_invalid_prefix(): void
    {
        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage('API key must start with "pk_live_" or "pk_test_"');

        ApiKey::from('invalid_1234567890abcdefghij');
    }

    public function test_validates_key_on_creation(): void
    {
        $this->expectException(AuthenticationException::class);

        ApiKey::from('');
    }

    public function test_minimum_valid_length(): void
    {
        // Exactly 20 characters should work
        $key = ApiKey::from('pk_live_123456789012');

        $this->assertTrue($key->isLive());
    }
}
