<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReloadCustomerCardInstanceInput implements ReloadCustomerCardInstanceInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var string */
        private readonly string $customerCardConfigId,
        /** @var string|null */
        private readonly string|null $threadId = null,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getCustomerCardConfigId(): string
    {
        return $this->customerCardConfigId;
    }

    public function getThreadId(): string|null
    {
        return $this->threadId;
    }
}
