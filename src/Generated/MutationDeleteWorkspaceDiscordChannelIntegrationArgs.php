<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWorkspaceDiscordChannelIntegrationArgs implements MutationDeleteWorkspaceDiscordChannelIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWorkspaceDiscordChannelIntegrationInput */
        private readonly DeleteWorkspaceDiscordChannelIntegrationInput $input,
    ) {
    }

    public function getInput(): DeleteWorkspaceDiscordChannelIntegrationInput
    {
        return $this->input;
    }
}
