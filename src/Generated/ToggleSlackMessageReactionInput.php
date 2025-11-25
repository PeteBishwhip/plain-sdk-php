<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ToggleSlackMessageReactionInput implements ToggleSlackMessageReactionInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $timelineEntryId,
        /** @var string */
        private readonly string $reactionName,
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

    public function getReactionName(): string
    {
        return $this->reactionName;
    }
}
