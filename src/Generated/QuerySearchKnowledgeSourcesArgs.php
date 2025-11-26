<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySearchKnowledgeSourcesArgs implements QuerySearchKnowledgeSourcesArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $searchQuery,
        /** @var int|null */
        private readonly int|null $pageSize = null,
        /** @var \Plain\Generated\SearchKnowledgeSourcesOptions|null */
        private readonly SearchKnowledgeSourcesOptions|null $options = null,
    ) {
    }

    public function getSearchQuery(): string
    {
        return $this->searchQuery;
    }

    public function getPageSize(): int|null
    {
        return $this->pageSize;
    }

    public function getOptions(): SearchKnowledgeSourcesOptions|null
    {
        return $this->options;
    }
}
