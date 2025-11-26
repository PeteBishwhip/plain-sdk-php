<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ForkThreadInput implements ForkThreadInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $timelineEntryId,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getTimelineEntryId(): string
    {
        return $this->timelineEntryId;
    }
}
