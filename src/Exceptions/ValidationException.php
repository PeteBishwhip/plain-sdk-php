<?php

declare(strict_types=1);

namespace Plain\Exceptions;

/**
 * Thrown when GraphQL validation errors occur.
 */
class ValidationException extends PlainException
{
    /**
     * @param array<int, array{message: string, path?: array<int, string|int>, extensions?: array<string, mixed>}> $errors
     */
    public function __construct(
        string $message,
        private readonly array $errors = [],
        int $code = 0,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get validation errors.
     *
     * @return array<int, array{message: string, path?: array<int, string|int>, extensions?: array<string, mixed>}>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
