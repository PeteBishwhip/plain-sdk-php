<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWorkspaceDiscordIntegrationArgs implements MutationDeleteWorkspaceDiscordIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWorkspaceDiscordIntegrationInput */
        private readonly DeleteWorkspaceDiscordIntegrationInput $input,
    ) {
    }

    public function getInput(): DeleteWorkspaceDiscordIntegrationInput
    {
        return $this->input;
    }
}
