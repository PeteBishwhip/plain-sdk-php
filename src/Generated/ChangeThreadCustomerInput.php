<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ChangeThreadCustomerInput implements ChangeThreadCustomerInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $customerId,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }
}
