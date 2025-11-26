<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerImpersonationInput implements CustomerImpersonationInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CustomerIdentifierInput */
        private readonly CustomerIdentifierInput $customerIdentifier,
    ) {
    }

    public function getCustomerIdentifier(): CustomerIdentifierInput
    {
        return $this->customerIdentifier;
    }
}
