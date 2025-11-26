<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ChangeThreadPriorityInput implements ChangeThreadPriorityInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var int */
        private readonly int $priority,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }
}
