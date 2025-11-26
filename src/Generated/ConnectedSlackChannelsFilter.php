<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ConnectedSlackChannelsFilter implements ConnectedSlackChannelsFilterInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $slackTeamIds = null,
        /** @var iterable<int, \Plain\Generated\ConnectedSlackChannelType>|null */
        private readonly iterable|null $channelTypes = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isEnabled = null,
    ) {
    }

    public function getSlackTeamIds(): iterable|null
    {
        return $this->slackTeamIds;
    }

    public function getChannelTypes(): iterable|null
    {
        return $this->channelTypes;
    }

    public function getIsEnabled(): BooleanInput|null
    {
        return $this->isEnabled;
    }
}
