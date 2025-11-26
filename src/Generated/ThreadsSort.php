<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadsSort implements ThreadsSortInterface
{
    public function __construct(
        /** @var \Plain\Generated\ThreadsSortField */
        private readonly ThreadsSortField $field,
        /** @var \Plain\Generated\SortDirection */
        private readonly SortDirection $direction,
    ) {
    }

    public function getField(): ThreadsSortField
    {
        return $this->field;
    }

    public function getDirection(): SortDirection
    {
        return $this->direction;
    }
}
