<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class RemoveTenantFieldSchemaMappingInput implements RemoveTenantFieldSchemaMappingInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $tenantFieldSchemaId,
    ) {
    }

    public function getTenantFieldSchemaId(): string
    {
        return $this->tenantFieldSchemaId;
    }
}
