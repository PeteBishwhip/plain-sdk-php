<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryRolesArgs implements QueryRolesArgsInterface
{
    public function __construct(
        /** @var int|null */
        private readonly int|null $first = null,
        /** @var string|null */
        private readonly string|null $after = null,
        /** @var int|null */
        private readonly int|null $last = null,
        /** @var string|null */
        private readonly string|null $before = null,
        /** @var \Plain\Generated\RoleFilter|null */
        private readonly RoleFilter|null $filters = null,
    ) {
    }

    public function getFirst(): int|null
    {
        return $this->first;
    }

    public function getAfter(): string|null
    {
        return $this->after;
    }

    public function getLast(): int|null
    {
        return $this->last;
    }

    public function getBefore(): string|null
    {
        return $this->before;
    }

    public function getFilters(): RoleFilter|null
    {
        return $this->filters;
    }
}
