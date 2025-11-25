<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryThreadByRefArgs implements QueryThreadByRefArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $ref,
    ) {
    }

    public function getRef(): string
    {
        return $this->ref;
    }
}
