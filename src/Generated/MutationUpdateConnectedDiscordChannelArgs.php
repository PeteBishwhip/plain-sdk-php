<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateConnectedDiscordChannelArgs implements MutationUpdateConnectedDiscordChannelArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateConnectedDiscordChannelInput */
        private readonly UpdateConnectedDiscordChannelInput $input,
    ) {
    }

    public function getInput(): UpdateConnectedDiscordChannelInput
    {
        return $this->input;
    }
}
