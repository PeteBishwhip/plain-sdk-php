<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceDiscordChannelIntegrationArgs implements MutationCreateWorkspaceDiscordChannelIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceDiscordChannelIntegrationInput */
        private readonly CreateWorkspaceDiscordChannelIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceDiscordChannelIntegrationInput
    {
        return $this->input;
    }
}
