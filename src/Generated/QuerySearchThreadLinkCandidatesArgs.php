<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySearchThreadLinkCandidatesArgs implements QuerySearchThreadLinkCandidatesArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ThreadLinkCandidateFilter */
        private readonly ThreadLinkCandidateFilter $filters,
        /** @var string */
        private readonly string $searchQuery,
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

    public function getFilters(): ThreadLinkCandidateFilter
    {
        return $this->filters;
    }

    public function getSearchQuery(): string
    {
        return $this->searchQuery;
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
