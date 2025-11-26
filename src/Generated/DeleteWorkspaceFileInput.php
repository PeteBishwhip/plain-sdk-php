<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteWorkspaceFileInput implements DeleteWorkspaceFileInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $workspaceFileId,
    ) {
    }

    public function getWorkspaceFileId(): string
    {
        return $this->workspaceFileId;
    }
}
