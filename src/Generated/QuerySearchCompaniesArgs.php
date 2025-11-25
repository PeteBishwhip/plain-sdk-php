<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySearchCompaniesArgs implements QuerySearchCompaniesArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CompaniesSearchQuery */
        private readonly CompaniesSearchQuery $searchQuery,
        /** @var \Plain\Generated\CompaniesFilter|null */
        private readonly CompaniesFilter|null $filters = null,
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

    public function getSearchQuery(): CompaniesSearchQuery
    {
        return $this->searchQuery;
    }

    public function getFilters(): CompaniesFilter|null
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
