<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerCardConfigOrderInput implements CustomerCardConfigOrderInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerCardConfigId,
        /** @var int */
        private readonly int $order,
    ) {
    }

    public function getCustomerCardConfigId(): string
    {
        return $this->customerCardConfigId;
    }

    public function getOrder(): int
    {
        return $this->order;
    }
}
