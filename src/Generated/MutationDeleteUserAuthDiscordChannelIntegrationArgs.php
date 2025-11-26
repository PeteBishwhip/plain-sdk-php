<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteUserAuthDiscordChannelIntegrationArgs implements MutationDeleteUserAuthDiscordChannelIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteUserAuthDiscordChannelIntegrationInput */
        private readonly DeleteUserAuthDiscordChannelIntegrationInput $input,
    ) {
    }

    public function getInput(): DeleteUserAuthDiscordChannelIntegrationInput
    {
        return $this->input;
    }
}
