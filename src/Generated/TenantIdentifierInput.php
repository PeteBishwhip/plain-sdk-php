<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TenantIdentifierInput implements TenantIdentifierInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $tenantId = null,
        /** @var string|null */
        private readonly string|null $externalId = null,
    ) {
    }

    public function getTenantId(): string|null
    {
        return $this->tenantId;
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }
}
