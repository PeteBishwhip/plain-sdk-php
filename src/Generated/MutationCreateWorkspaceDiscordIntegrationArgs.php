<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceDiscordIntegrationArgs implements MutationCreateWorkspaceDiscordIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceDiscordIntegrationInput */
        private readonly CreateWorkspaceDiscordIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceDiscordIntegrationInput
    {
        return $this->input;
    }
}
