<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterAccessSettingsInput implements HelpCenterAccessSettingsInputInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $tierIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $tenantIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $companyIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $customerIds = null,
    ) {
    }

    public function getTierIds(): iterable|null
    {
        return $this->tierIds;
    }

    public function getTenantIds(): iterable|null
    {
        return $this->tenantIds;
    }

    public function getCompanyIds(): iterable|null
    {
        return $this->companyIds;
    }

    public function getCustomerIds(): iterable|null
    {
        return $this->customerIds;
    }
}
