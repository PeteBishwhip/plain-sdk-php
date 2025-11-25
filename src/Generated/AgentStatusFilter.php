<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AgentStatusFilter implements AgentStatusFilterInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\AgentStatus>|null */
        private readonly iterable|null $statuses = null,
        /** @var string|null */
        private readonly string|null $handedOffReason = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $updatedAt = null,
    ) {
    }

    public function getStatuses(): iterable|null
    {
        return $this->statuses;
    }

    public function getHandedOffReason(): string|null
    {
        return $this->handedOffReason;
    }

    public function getUpdatedAt(): DatetimeFilter|null
    {
        return $this->updatedAt;
    }
}
