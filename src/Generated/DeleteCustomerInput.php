<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteCustomerInput implements DeleteCustomerInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }
}
