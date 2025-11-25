<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteUserAuthSlackIntegrationInput implements DeleteUserAuthSlackIntegrationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $slackTeamId,
    ) {
    }

    public function getSlackTeamId(): string
    {
        return $this->slackTeamId;
    }
}
