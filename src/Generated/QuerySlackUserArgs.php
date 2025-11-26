<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySlackUserArgs implements QuerySlackUserArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $slackTeamId,
        /** @var string */
        private readonly string $slackChannelId,
        /** @var string */
        private readonly string $slackUserId,
    ) {
    }

    public function getSlackTeamId(): string
    {
        return $this->slackTeamId;
    }

    public function getSlackChannelId(): string
    {
        return $this->slackChannelId;
    }

    public function getSlackUserId(): string
    {
        return $this->slackUserId;
    }
}
