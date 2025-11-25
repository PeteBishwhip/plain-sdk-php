<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteThreadFieldIdentifier implements DeleteThreadFieldIdentifierInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $key,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getKey(): string
    {
        return $this->key;
    }
}
