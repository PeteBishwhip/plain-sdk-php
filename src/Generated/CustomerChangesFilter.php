<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerChangesFilter implements CustomerChangesFilterInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $assignedToUser = null,
    ) {
    }

    public function getAssignedToUser(): iterable|null
    {
        return $this->assignedToUser;
    }
}
