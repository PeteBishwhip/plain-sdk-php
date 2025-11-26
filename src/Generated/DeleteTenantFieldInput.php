<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteTenantFieldInput implements DeleteTenantFieldInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $tenantFieldId,
    ) {
    }

    public function getTenantFieldId(): string
    {
        return $this->tenantFieldId;
    }
}
