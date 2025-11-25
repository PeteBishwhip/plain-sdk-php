<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryWorkspaceDiscordIntegrationArgs implements QueryWorkspaceDiscordIntegrationArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $integrationId,
    ) {
    }

    public function getIntegrationId(): string
    {
        return $this->integrationId;
    }
}
