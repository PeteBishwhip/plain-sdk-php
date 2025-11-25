<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterPortalSettingsThreadVisibilityInput implements HelpCenterPortalSettingsThreadVisibilityInputInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $customerCompany = null,
        /** @var bool|null */
        private readonly bool|null $customerTenants = null,
    ) {
    }

    public function getCustomerCompany(): bool|null
    {
        return $this->customerCompany;
    }

    public function getCustomerTenants(): bool|null
    {
        return $this->customerTenants;
    }
}
