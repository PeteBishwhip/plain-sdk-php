<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateWorkspaceArgs implements MutationUpdateWorkspaceArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateWorkspaceInput */
        private readonly UpdateWorkspaceInput $input,
    ) {
    }

    public function getInput(): UpdateWorkspaceInput
    {
        return $this->input;
    }
}
