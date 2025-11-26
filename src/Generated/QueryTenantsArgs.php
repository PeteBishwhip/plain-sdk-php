<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryTenantsArgs implements QueryTenantsArgsInterface
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
        /** @var \Plain\Generated\TenantsFilter|null */
        private readonly TenantsFilter|null $filters = null,
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

    public function getFilters(): TenantsFilter|null
    {
        return $this->filters;
    }
}
