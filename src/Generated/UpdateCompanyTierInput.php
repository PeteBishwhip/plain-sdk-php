<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateCompanyTierInput implements UpdateCompanyTierInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CompanyIdentifierInput */
        private readonly CompanyIdentifierInput $companyIdentifier,
        /** @var \Plain\Generated\TierIdentifierInput|null */
        private readonly TierIdentifierInput|null $tierIdentifier = null,
    ) {
    }

    public function getTierIdentifier(): TierIdentifierInput|null
    {
        return $this->tierIdentifier;
    }

    public function getCompanyIdentifier(): CompanyIdentifierInput
    {
        return $this->companyIdentifier;
    }
}
