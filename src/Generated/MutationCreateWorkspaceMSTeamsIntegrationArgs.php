<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceMSTeamsIntegrationArgs implements MutationCreateWorkspaceMSTeamsIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceMSTeamsIntegrationInput */
        private readonly CreateWorkspaceMSTeamsIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceMSTeamsIntegrationInput
    {
        return $this->input;
    }
}
