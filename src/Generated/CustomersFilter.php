<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomersFilter implements CustomersFilterInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $isMarkedAsSpam = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $customerGroupIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $customerGroupKeys = null,
        /** @var iterable<int, \Plain\Generated\CompanyIdentifierInput>|null */
        private readonly iterable|null $companyIdentifiers = null,
        /** @var iterable<int, \Plain\Generated\TenantIdentifierInput>|null */
        private readonly iterable|null $tenantIdentifiers = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $updatedAt = null,
    ) {
    }

    public function getIsMarkedAsSpam(): bool|null
    {
        return $this->isMarkedAsSpam;
    }

    public function getCustomerGroupIds(): iterable|null
    {
        return $this->customerGroupIds;
    }

    public function getCustomerGroupKeys(): iterable|null
    {
        return $this->customerGroupKeys;
    }

    public function getCompanyIdentifiers(): iterable|null
    {
        return $this->companyIdentifiers;
    }

    public function getTenantIdentifiers(): iterable|null
    {
        return $this->tenantIdentifiers;
    }

    public function getUpdatedAt(): DatetimeFilter|null
    {
        return $this->updatedAt;
    }
}
