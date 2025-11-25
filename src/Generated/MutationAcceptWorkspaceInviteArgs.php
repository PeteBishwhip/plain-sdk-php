<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAcceptWorkspaceInviteArgs implements MutationAcceptWorkspaceInviteArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AcceptWorkspaceInviteInput */
        private readonly AcceptWorkspaceInviteInput $input,
    ) {
    }

    public function getInput(): AcceptWorkspaceInviteInput
    {
        return $this->input;
    }
}
