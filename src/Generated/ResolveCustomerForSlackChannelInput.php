<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ResolveCustomerForSlackChannelInput implements ResolveCustomerForSlackChannelInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $slackTeamId,
        /** @var string */
        private readonly string $slackChannelId,
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
}
