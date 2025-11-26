<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TenantFieldIdentifier implements TenantFieldIdentifierInterface
{
    public function __construct(
        /** @var string */
        private readonly string $tenantId,
        /** @var string */
        private readonly string $externalFieldId,
    ) {
    }

    public function getTenantId(): string
    {
        return $this->tenantId;
    }

    public function getExternalFieldId(): string
    {
        return $this->externalFieldId;
    }
}
