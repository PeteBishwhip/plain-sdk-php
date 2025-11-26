<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceSlackIntegrationArgs implements MutationCreateWorkspaceSlackIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceSlackIntegrationInput */
        private readonly CreateWorkspaceSlackIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceSlackIntegrationInput
    {
        return $this->input;
    }
}
