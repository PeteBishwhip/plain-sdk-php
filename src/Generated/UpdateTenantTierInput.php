<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateTenantTierInput implements UpdateTenantTierInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\TenantIdentifierInput */
        private readonly TenantIdentifierInput $tenantIdentifier,
        /** @var \Plain\Generated\TierIdentifierInput|null */
        private readonly TierIdentifierInput|null $tierIdentifier = null,
    ) {
    }

    public function getTierIdentifier(): TierIdentifierInput|null
    {
        return $this->tierIdentifier;
    }

    public function getTenantIdentifier(): TenantIdentifierInput
    {
        return $this->tenantIdentifier;
    }
}
