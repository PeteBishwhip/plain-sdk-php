<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWorkspaceInviteArgs implements MutationDeleteWorkspaceInviteArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWorkspaceInviteInput */
        private readonly DeleteWorkspaceInviteInput $input,
    ) {
    }

    public function getInput(): DeleteWorkspaceInviteInput
    {
        return $this->input;
    }
}
