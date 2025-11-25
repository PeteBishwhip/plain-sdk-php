<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateIndexedDocumentInput implements CreateIndexedDocumentInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $url,
        /** @var string */
        private readonly string $knowledgeSourceId,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $labelTypeIds = null,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getLabelTypeIds(): iterable|null
    {
        return $this->labelTypeIds;
    }

    public function getKnowledgeSourceId(): string
    {
        return $this->knowledgeSourceId;
    }
}
