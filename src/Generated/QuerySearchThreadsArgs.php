<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySearchThreadsArgs implements QuerySearchThreadsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ThreadsSearchQuery */
        private readonly ThreadsSearchQuery $searchQuery,
        /** @var \Plain\Generated\ThreadsFilter|null */
        private readonly ThreadsFilter|null $filters = null,
        /** @var int|null */
        private readonly int|null $first = null,
        /** @var string|null */
        private readonly string|null $after = null,
        /** @var int|null */
        private readonly int|null $last = null,
        /** @var string|null */
        private readonly string|null $before = null,
    ) {
    }

    public function getSearchQuery(): ThreadsSearchQuery
    {
        return $this->searchQuery;
    }

    public function getFilters(): ThreadsFilter|null
    {
        return $this->filters;
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
}
