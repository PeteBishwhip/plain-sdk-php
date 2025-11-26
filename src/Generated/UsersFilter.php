<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UsersFilter implements UsersFilterInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $isAssignableToCustomer = null,
        /** @var bool|null */
        private readonly bool|null $isAssignableToThread = null,
    ) {
    }

    public function getIsAssignableToCustomer(): bool|null
    {
        return $this->isAssignableToCustomer;
    }

    public function getIsAssignableToThread(): bool|null
    {
        return $this->isAssignableToThread;
    }
}
