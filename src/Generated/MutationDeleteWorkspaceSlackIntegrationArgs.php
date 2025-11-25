<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWorkspaceSlackIntegrationArgs implements MutationDeleteWorkspaceSlackIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWorkspaceSlackIntegrationInput */
        private readonly DeleteWorkspaceSlackIntegrationInput $input,
    ) {
    }

    public function getInput(): DeleteWorkspaceSlackIntegrationInput
    {
        return $this->input;
    }
}
