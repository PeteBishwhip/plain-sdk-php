<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryGetMSTeamsMembersForChannelArgs implements QueryGetMSTeamsMembersForChannelArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $msTeamsChannelId,
        /** @var string */
        private readonly string $msTeamsTeamId,
    ) {
    }

    public function getMsTeamsChannelId(): string
    {
        return $this->msTeamsChannelId;
    }

    public function getMsTeamsTeamId(): string
    {
        return $this->msTeamsTeamId;
    }
}
