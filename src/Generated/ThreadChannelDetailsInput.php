<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadChannelDetailsInput implements ThreadChannelDetailsInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\SlackThreadChannelDetailsInput|null */
        private readonly SlackThreadChannelDetailsInput|null $slack = null,
        /** @var \Plain\Generated\MSTeamsThreadChannelDetailsInput|null */
        private readonly MSTeamsThreadChannelDetailsInput|null $msTeams = null,
    ) {
    }

    public function getSlack(): SlackThreadChannelDetailsInput|null
    {
        return $this->slack;
    }

    public function getMsTeams(): MSTeamsThreadChannelDetailsInput|null
    {
        return $this->msTeams;
    }
}
