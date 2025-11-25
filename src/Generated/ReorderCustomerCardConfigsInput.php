<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReorderCustomerCardConfigsInput implements ReorderCustomerCardConfigsInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\CustomerCardConfigOrderInput> */
        private readonly iterable $customerCardConfigOrders,
    ) {
    }

    public function getCustomerCardConfigOrders(): iterable
    {
        return $this->customerCardConfigOrders;
    }
}
