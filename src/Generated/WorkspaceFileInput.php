<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class WorkspaceFileInput implements WorkspaceFileInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $workspaceFileId = null,
    ) {
    }

    public function getWorkspaceFileId(): string|null
    {
        return $this->workspaceFileId;
    }
}
