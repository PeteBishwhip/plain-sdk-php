<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateWorkspaceMSTeamsIntegrationInput implements CreateWorkspaceMSTeamsIntegrationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $msTeamsTenantId,
    ) {
    }

    public function getMsTeamsTenantId(): string
    {
        return $this->msTeamsTenantId;
    }
}
