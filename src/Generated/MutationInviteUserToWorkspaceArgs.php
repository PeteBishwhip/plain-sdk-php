<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationInviteUserToWorkspaceArgs implements MutationInviteUserToWorkspaceArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\InviteUserToWorkspaceInput */
        private readonly InviteUserToWorkspaceInput $input,
    ) {
    }

    public function getInput(): InviteUserToWorkspaceInput
    {
        return $this->input;
    }
}
