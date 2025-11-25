<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryKnowledgeSourceArgs implements QueryKnowledgeSourceArgsInterface
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
