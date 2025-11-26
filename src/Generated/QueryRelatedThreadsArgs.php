<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryRelatedThreadsArgs implements QueryRelatedThreadsArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }
}
