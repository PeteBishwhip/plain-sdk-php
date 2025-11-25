<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TenantsFilter implements TenantsFilterInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $tenantIds = null,
        /** @var bool|null */
        private readonly bool|null $isDeleted = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $updatedAt = null,
    ) {
    }

    public function getTenantIds(): iterable|null
    {
        return $this->tenantIds;
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
