<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryWorkspaceArgs implements QueryWorkspaceArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $workspaceId,
    ) {
    }

    public function getWorkspaceId(): string
    {
        return $this->workspaceId;
    }
}
