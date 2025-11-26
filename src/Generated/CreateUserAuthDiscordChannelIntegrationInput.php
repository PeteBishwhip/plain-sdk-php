<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateUserAuthDiscordChannelIntegrationInput implements CreateUserAuthDiscordChannelIntegrationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $discordGuildId,
        /** @var string */
        private readonly string $authCode,
        /** @var string */
        private readonly string $redirectUrl,
    ) {
    }

    public function getDiscordGuildId(): string
    {
        return $this->discordGuildId;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }
}
