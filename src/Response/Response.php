<?php

declare(strict_types=1);

namespace Plain\Response;

use Plain\Exceptions\GraphQLException;

/**
 * Represents a GraphQL response from the Plain API.
 */
final class Response
{
    /**
     * @param array<string, mixed>|null $data
     * @param array<int, array{message: string, path?: array<int, string|int>, extensions?: array<string, mixed>}>|null $errors
     * @param array<string, mixed>|null $extensions
     */
    public function __construct(
        private readonly ?array $data = null,
        private readonly ?array $errors = null,
        private readonly ?array $extensions = null,
    ) {
    }

    /**
     * Create a Response from a JSON string.
     *
     * @throws GraphQLException If the response contains errors
     */
    public static function fromJson(string $json): self
    {
        /** @var array{data?: array<string, mixed>|null, errors?: array<int, array{message: string, path?: array<int, string|int>, extensions?: array<string, mixed>}>|null, extensions?: array<string, mixed>|null} $decoded */
        $decoded = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

        return new self(
            data: $decoded['data'] ?? null,
            errors: $decoded['errors'] ?? null,
            extensions: $decoded['extensions'] ?? null,
        );
    }

    /**
     * Create a Response from an array.
     *
     * @param array{data?: array<string, mixed>|null, errors?: array<int, array{message: string, path?: array<int, string|int>, extensions?: array<string, mixed>}>|null, extensions?: array<string, mixed>|null} $array
     */
    public static function fromArray(array $array): self
    {
        return new self(
            data: $array['data'] ?? null,
            errors: $array['errors'] ?? null,
            extensions: $array['extensions'] ?? null,
        );
    }

    /**
     * Get the response data.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Get the response errors.
     *
     * @return array<int, array{message: string, path?: array<int, string|int>, extensions?: array<string, mixed>}>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Get the response extensions.
     *
     * @return array<string, mixed>|null
     */
    public function getExtensions(): ?array
    {
        return $this->extensions;
    }

    /**
     * Check if the response has errors.
     */
    public function hasErrors(): bool
    {
        return $this->errors !== null && count($this->errors) > 0;
    }

    /**
     * Check if the response has data.
     */
    public function hasData(): bool
    {
        return $this->data !== null;
    }

    /**
     * Throw an exception if the response has errors.
     *
     * @throws GraphQLException
     */
    public function throwIfHasErrors(): void
    {
        if ($this->hasErrors()) {
            $errorMessages = array_map(
                fn(array $error): string => $error['message'],
                $this->errors ?? []
            );

            throw new GraphQLException(
                'GraphQL errors: ' . implode(', ', $errorMessages),
                $this->errors ?? []
            );
        }
    }

    /**
     * Get a specific field from the data.
     *
     * @return mixed
     */
    public function get(string $key): mixed
    {
        return $this->data[$key] ?? null;
    }

    /**
     * Convert the response to an array.
     *
     * @return array{data?: array<string, mixed>|null, errors?: array<int, array{message: string, path?: array<int, string|int>, extensions?: array<string, mixed>}>|null, extensions?: array<string, mixed>|null}
     */
    public function toArray(): array
    {
        $result = [];

        if ($this->data !== null) {
            $result['data'] = $this->data;
        }

        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }

        if ($this->extensions !== null) {
            $result['extensions'] = $this->extensions;
        }

        return $result;
    }
}
