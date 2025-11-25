<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class EscalateThreadInput implements EscalateThreadInputInterface
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
