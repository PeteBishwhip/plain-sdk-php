<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ResolveCustomerForMSTeamsChannelInput implements ResolveCustomerForMSTeamsChannelInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $msTeamsTeamId,
        /** @var string */
        private readonly string $msTeamsChannelId,
    ) {
    }

    public function getMsTeamsTeamId(): string
    {
        return $this->msTeamsTeamId;
    }

    public function getMsTeamsChannelId(): string
    {
        return $this->msTeamsChannelId;
    }
}
