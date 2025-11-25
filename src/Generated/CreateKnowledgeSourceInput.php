<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateKnowledgeSourceInput implements CreateKnowledgeSourceInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $url,
        /** @var \Plain\Generated\KnowledgeSourceType */
        private readonly KnowledgeSourceType $type,
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

    public function getType(): KnowledgeSourceType
    {
        return $this->type;
    }
}
