<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SetupTenantFieldSchemaMappingInput implements SetupTenantFieldSchemaMappingInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $tenantFieldSchemaId,
        /** @var \Plain\Generated\TenantFieldMappingConcept */
        private readonly TenantFieldMappingConcept $mapsTo,
    ) {
    }

    public function getTenantFieldSchemaId(): string
    {
        return $this->tenantFieldSchemaId;
    }

    public function getMapsTo(): TenantFieldMappingConcept
    {
        return $this->mapsTo;
    }
}
