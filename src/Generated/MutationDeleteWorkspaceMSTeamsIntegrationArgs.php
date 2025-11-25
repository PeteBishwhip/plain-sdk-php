<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWorkspaceMSTeamsIntegrationArgs implements MutationDeleteWorkspaceMSTeamsIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWorkspaceMSTeamsIntegrationInput */
        private readonly DeleteWorkspaceMSTeamsIntegrationInput $input,
    ) {
    }

    public function getInput(): DeleteWorkspaceMSTeamsIntegrationInput
    {
        return $this->input;
    }
}
