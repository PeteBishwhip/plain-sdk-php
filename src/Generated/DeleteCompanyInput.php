<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteCompanyInput implements DeleteCompanyInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CompanyIdentifierInput */
        private readonly CompanyIdentifierInput $companyIdentifier,
    ) {
    }

    public function getCompanyIdentifier(): CompanyIdentifierInput
    {
        return $this->companyIdentifier;
    }
}
