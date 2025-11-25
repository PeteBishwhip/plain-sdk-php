<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryTimelineEntryArgs implements QueryTimelineEntryArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var string */
        private readonly string $timelineEntryId,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getTimelineEntryId(): string
    {
        return $this->timelineEntryId;
    }
}
