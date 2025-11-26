<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryCustomerCardInstancesArgs implements QueryCustomerCardInstancesArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var string|null */
        private readonly string|null $threadId = null,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getThreadId(): string|null
    {
        return $this->threadId;
    }
}
