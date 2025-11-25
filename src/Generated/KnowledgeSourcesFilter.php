<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class KnowledgeSourcesFilter implements KnowledgeSourcesFilterInterface
{
    public function __construct(
        /** @var \Plain\Generated\KnowledgeSourceType|null */
        private readonly KnowledgeSourceType|null $type = null,
    ) {
    }

    public function getType(): KnowledgeSourceType|null
    {
        return $this->type;
    }
}
