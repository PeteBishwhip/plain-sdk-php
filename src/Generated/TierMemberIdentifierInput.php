<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TierMemberIdentifierInput implements TierMemberIdentifierInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $companyId = null,
        /** @var string|null */
        private readonly string|null $tenantId = null,
    ) {
    }

    public function getCompanyId(): string|null
    {
        return $this->companyId;
    }

    public function getTenantId(): string|null
    {
        return $this->tenantId;
    }
}
