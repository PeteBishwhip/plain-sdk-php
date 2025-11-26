<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class RefreshConnectedDiscordChannelsInput implements RefreshConnectedDiscordChannelsInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $discordGuildId,
    ) {
    }

    public function getDiscordGuildId(): string
    {
        return $this->discordGuildId;
    }
}
