<?php

declare(strict_types=1);

namespace Plain\Auth;

use Plain\Exceptions\AuthenticationException;

/**
 * Represents a Plain API key with validation and environment detection.
 */
final class ApiKey
{
    private const LIVE_PREFIX = 'pk_live_';
    private const TEST_PREFIX = 'pk_test_';
    private const MIN_KEY_LENGTH = 20;

    private function __construct(
        private readonly string $key
    ) {
    }

    /**
     * Create an ApiKey from a string.
     *
     * @throws AuthenticationException If the API key format is invalid
     */
    public static function from(string $key): self
    {
        $instance = new self($key);
        $instance->validate();

        return $instance;
    }

    /**
     * Validate the API key format.
     *
     * @throws AuthenticationException If the API key format is invalid
     */
    public function validate(): void
    {
        if (empty($this->key)) {
            throw new AuthenticationException('API key cannot be empty');
        }

        if (strlen($this->key) < self::MIN_KEY_LENGTH) {
            throw new AuthenticationException(
                sprintf('API key must be at least %d characters long', self::MIN_KEY_LENGTH)
            );
        }

        if (!$this->isLive() && !$this->isTest()) {
            throw new AuthenticationException(
                sprintf(
                    'API key must start with "%s" or "%s"',
                    self::LIVE_PREFIX,
                    self::TEST_PREFIX
                )
            );
        }
    }

    /**
     * Check if this is a live API key.
     */
    public function isLive(): bool
    {
        return str_starts_with($this->key, self::LIVE_PREFIX);
    }

    /**
     * Check if this is a test API key.
     */
    public function isTest(): bool
    {
        return str_starts_with($this->key, self::TEST_PREFIX);
    }

    /**
     * Get the raw API key string.
     */
    public function toString(): string
    {
        return $this->key;
    }

    /**
     * Get the API key as a string.
     */
    public function __toString(): string
    {
        return $this->key;
    }

    /**
     * Get the environment type (live or test).
     */
    public function getEnvironment(): string
    {
        return $this->isLive() ? 'live' : 'test';
    }
}
