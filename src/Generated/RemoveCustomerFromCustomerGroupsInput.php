<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class RemoveCustomerFromCustomerGroupsInput implements RemoveCustomerFromCustomerGroupsInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var iterable<int, \Plain\Generated\CustomerGroupIdentifier> */
        private readonly iterable $customerGroupIdentifiers,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getCustomerGroupIdentifiers(): iterable
    {
        return $this->customerGroupIdentifiers;
    }
}
