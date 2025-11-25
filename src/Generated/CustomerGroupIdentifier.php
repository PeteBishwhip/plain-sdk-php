<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerGroupIdentifier implements CustomerGroupIdentifierInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $customerGroupId = null,
        /** @var string|null */
        private readonly string|null $customerGroupKey = null,
        /** @var string|null */
        private readonly string|null $externalId = null,
    ) {
    }

    public function getCustomerGroupId(): string|null
    {
        return $this->customerGroupId;
    }

    public function getCustomerGroupKey(): string|null
    {
        return $this->customerGroupKey;
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }
}
