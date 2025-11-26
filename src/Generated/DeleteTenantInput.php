<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteTenantInput implements DeleteTenantInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\TenantIdentifierInput */
        private readonly TenantIdentifierInput $tenantIdentifier,
    ) {
    }

    public function getTenantIdentifier(): TenantIdentifierInput
    {
        return $this->tenantIdentifier;
    }
}
