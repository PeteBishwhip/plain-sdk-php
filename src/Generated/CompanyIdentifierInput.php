<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CompanyIdentifierInput implements CompanyIdentifierInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $companyId = null,
        /** @var string|null */
        private readonly string|null $companyDomainName = null,
    ) {
    }

    public function getCompanyId(): string|null
    {
        return $this->companyId;
    }

    public function getCompanyDomainName(): string|null
    {
        return $this->companyDomainName;
    }
}
