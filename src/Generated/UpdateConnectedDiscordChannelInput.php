<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateConnectedDiscordChannelInput implements UpdateConnectedDiscordChannelInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $connectedDiscordChannelId,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isEnabled = null,
    ) {
    }

    public function getConnectedDiscordChannelId(): string
    {
        return $this->connectedDiscordChannelId;
    }

    public function getIsEnabled(): BooleanInput|null
    {
        return $this->isEnabled;
    }
}
