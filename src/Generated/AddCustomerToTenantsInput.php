<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AddCustomerToTenantsInput implements AddCustomerToTenantsInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CustomerIdentifierInput */
        private readonly CustomerIdentifierInput $customerIdentifier,
        /** @var iterable<int, \Plain\Generated\TenantIdentifierInput> */
        private readonly iterable $tenantIdentifiers,
    ) {
    }

    public function getCustomerIdentifier(): CustomerIdentifierInput
    {
        return $this->customerIdentifier;
    }

    public function getTenantIdentifiers(): iterable
    {
        return $this->tenantIdentifiers;
    }
}
