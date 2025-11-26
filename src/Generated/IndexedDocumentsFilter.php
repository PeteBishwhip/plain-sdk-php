<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class IndexedDocumentsFilter implements IndexedDocumentsFilterInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $knowledgeSourceId = null,
    ) {
    }

    public function getKnowledgeSourceId(): string|null
    {
        return $this->knowledgeSourceId;
    }
}
