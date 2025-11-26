<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWorkspaceFileArgs implements MutationDeleteWorkspaceFileArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWorkspaceFileInput */
        private readonly DeleteWorkspaceFileInput $input,
    ) {
    }

    public function getInput(): DeleteWorkspaceFileInput
    {
        return $this->input;
    }
}
