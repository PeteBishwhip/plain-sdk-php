<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryThreadFieldSchemaArgs implements QueryThreadFieldSchemaArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadFieldSchemaId,
    ) {
    }

    public function getThreadFieldSchemaId(): string
    {
        return $this->threadFieldSchemaId;
    }
}
