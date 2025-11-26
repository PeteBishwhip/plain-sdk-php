<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryUserByEmailArgs implements QueryUserByEmailArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $email,
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
