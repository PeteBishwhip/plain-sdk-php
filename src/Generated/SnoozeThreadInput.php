<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SnoozeThreadInput implements SnoozeThreadInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var int|null */
        private readonly int|null $durationSeconds = null,
        /** @var \Plain\Generated\SnoozeStatusDetail|null */
        private readonly SnoozeStatusDetail|null $statusDetail = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getDurationSeconds(): int|null
    {
        return $this->durationSeconds;
    }

    public function getStatusDetail(): SnoozeStatusDetail|null
    {
        return $this->statusDetail;
    }
}
