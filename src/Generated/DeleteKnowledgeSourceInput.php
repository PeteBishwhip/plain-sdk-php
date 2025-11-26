<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteKnowledgeSourceInput implements DeleteKnowledgeSourceInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $knowledgeSourceId,
    ) {
    }

    public function getKnowledgeSourceId(): string
    {
        return $this->knowledgeSourceId;
    }
}
