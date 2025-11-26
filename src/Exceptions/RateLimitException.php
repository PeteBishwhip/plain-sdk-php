<?php

declare(strict_types=1);

namespace Plain\Exceptions;

/**
 * Thrown when rate limit is exceeded (429).
 */
class RateLimitException extends PlainException
{
    public function __construct(
        string $message,
        private readonly ?int $retryAfter = null,
        int $code = 429,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the number of seconds to wait before retrying.
     */
    public function getRetryAfter(): ?int
    {
        return $this->retryAfter;
    }
}
