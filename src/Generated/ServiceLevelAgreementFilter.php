<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ServiceLevelAgreementFilter implements ServiceLevelAgreementFilterInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\ServiceLevelAgreementType>|null */
        private readonly iterable|null $types = null,
        /** @var iterable<int, \Plain\Generated\ServiceLevelAgreementStatus>|null */
        private readonly iterable|null $statuses = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $updatedAt = null,
    ) {
    }

    public function getTypes(): iterable|null
    {
        return $this->types;
    }

    public function getStatuses(): iterable|null
    {
        return $this->statuses;
    }

    public function getUpdatedAt(): DatetimeFilter|null
    {
        return $this->updatedAt;
    }
}
