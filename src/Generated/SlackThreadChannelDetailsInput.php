<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SlackThreadChannelDetailsInput implements SlackThreadChannelDetailsInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $slackChannelId,
        /** @var string */
        private readonly string $slackTeamId,
    ) {
    }

    public function getSlackChannelId(): string
    {
        return $this->slackChannelId;
    }

    public function getSlackTeamId(): string
    {
        return $this->slackTeamId;
    }
}
