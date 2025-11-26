<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRefreshConnectedDiscordChannelsArgs implements MutationRefreshConnectedDiscordChannelsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RefreshConnectedDiscordChannelsInput */
        private readonly RefreshConnectedDiscordChannelsInput $input,
    ) {
    }

    public function getInput(): RefreshConnectedDiscordChannelsInput
    {
        return $this->input;
    }
}
