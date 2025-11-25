<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateCustomerCompanyInput implements UpdateCustomerCompanyInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var \Plain\Generated\CompanyIdentifierInput|null */
        private readonly CompanyIdentifierInput|null $companyIdentifier = null,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getCompanyIdentifier(): CompanyIdentifierInput|null
    {
        return $this->companyIdentifier;
    }
}
