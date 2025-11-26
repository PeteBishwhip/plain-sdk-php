<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateConnectedSlackChannelInput implements UpdateConnectedSlackChannelInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $connectedSlackChannelId,
        /** @var \Plain\Generated\ConnectedSlackChannelType|null */
        private readonly ConnectedSlackChannelType|null $channelType = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isEnabled = null,
    ) {
    }

    public function getConnectedSlackChannelId(): string
    {
        return $this->connectedSlackChannelId;
    }

    public function getChannelType(): ConnectedSlackChannelType|null
    {
        return $this->channelType;
    }

    public function getIsEnabled(): BooleanInput|null
    {
        return $this->isEnabled;
    }
}
