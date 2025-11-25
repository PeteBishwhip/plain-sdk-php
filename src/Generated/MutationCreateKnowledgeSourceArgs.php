<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateKnowledgeSourceArgs implements MutationCreateKnowledgeSourceArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateKnowledgeSourceInput */
        private readonly CreateKnowledgeSourceInput $input,
    ) {
    }

    public function getInput(): CreateKnowledgeSourceInput
    {
        return $this->input;
    }
}
