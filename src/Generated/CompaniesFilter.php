<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CompaniesFilter implements CompaniesFilterInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $companyIds = null,
        /** @var bool|null */
        private readonly bool|null $isDeleted = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $updatedAt = null,
    ) {
    }

    public function getCompanyIds(): iterable|null
    {
        return $this->companyIds;
    }

    public function getIsDeleted(): bool|null
    {
        return $this->isDeleted;
    }

    public function getUpdatedAt(): DatetimeFilter|null
    {
        return $this->updatedAt;
    }
}
