<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SearchKnowledgeSourcesOptions implements SearchKnowledgeSourcesOptionsInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $labelTypeIds = null,
    ) {
    }

    public function getLabelTypeIds(): iterable|null
    {
        return $this->labelTypeIds;
    }
}
