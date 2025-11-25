<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryCustomerCardConfigArgs implements QueryCustomerCardConfigArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerCardConfigId,
    ) {
    }

    public function getCustomerCardConfigId(): string
    {
        return $this->customerCardConfigId;
    }
}
