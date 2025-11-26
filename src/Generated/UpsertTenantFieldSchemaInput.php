<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertTenantFieldSchemaInput implements UpsertTenantFieldSchemaInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\TenantFieldSchemaInput> */
        private readonly iterable $tenantFieldSchemas,
    ) {
    }

    public function getTenantFieldSchemas(): iterable
    {
        return $this->tenantFieldSchemas;
    }
}
