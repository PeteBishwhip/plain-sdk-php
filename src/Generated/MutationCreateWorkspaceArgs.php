<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceArgs implements MutationCreateWorkspaceArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceInput */
        private readonly CreateWorkspaceInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceInput
    {
        return $this->input;
    }
}
