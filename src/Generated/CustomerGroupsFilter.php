<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerGroupsFilter implements CustomerGroupsFilterInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $externalIds = null,
    ) {
    }

    public function getExternalIds(): iterable|null
    {
        return $this->externalIds;
    }
}
