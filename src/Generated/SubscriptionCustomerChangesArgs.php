<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SubscriptionCustomerChangesArgs implements SubscriptionCustomerChangesArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CustomerChangesFilter|null */
        private readonly CustomerChangesFilter|null $filters = null,
    ) {
    }

    public function getFilters(): CustomerChangesFilter|null
    {
        return $this->filters;
    }
}
