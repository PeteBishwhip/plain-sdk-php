<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomersSort implements CustomersSortInterface
{
    public function __construct(
        /** @var \Plain\Generated\CustomersSortField */
        private readonly CustomersSortField $field,
        /** @var \Plain\Generated\SortDirection */
        private readonly SortDirection $direction,
    ) {
    }

    public function getField(): CustomersSortField
    {
        return $this->field;
    }

    public function getDirection(): SortDirection
    {
        return $this->direction;
    }
}
