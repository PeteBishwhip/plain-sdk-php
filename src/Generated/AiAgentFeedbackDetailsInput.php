<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AiAgentFeedbackDetailsInput implements AiAgentFeedbackDetailsInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $reason,
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $timelineEntryId,
        /** @var string|null */
        private readonly string|null $comment = null,
    ) {
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function getComment(): string|null
    {
        return $this->comment;
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
