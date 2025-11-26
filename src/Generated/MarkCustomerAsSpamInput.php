<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MarkCustomerAsSpamInput implements MarkCustomerAsSpamInputInterface
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
