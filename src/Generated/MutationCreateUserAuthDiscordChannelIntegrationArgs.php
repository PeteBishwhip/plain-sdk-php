<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateUserAuthDiscordChannelIntegrationArgs implements MutationCreateUserAuthDiscordChannelIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateUserAuthDiscordChannelIntegrationInput */
        private readonly CreateUserAuthDiscordChannelIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateUserAuthDiscordChannelIntegrationInput
    {
        return $this->input;
    }
}
