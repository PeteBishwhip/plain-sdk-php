<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteCustomerGroupInput implements DeleteCustomerGroupInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerGroupId,
    ) {
    }

    public function getCustomerGroupId(): string
    {
        return $this->customerGroupId;
    }
}
