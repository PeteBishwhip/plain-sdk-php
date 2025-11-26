<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteKnowledgeSourceArgs implements MutationDeleteKnowledgeSourceArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteKnowledgeSourceInput */
        private readonly DeleteKnowledgeSourceInput $input,
    ) {
    }

    public function getInput(): DeleteKnowledgeSourceInput
    {
        return $this->input;
    }
}
