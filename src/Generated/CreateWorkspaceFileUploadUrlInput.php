<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateWorkspaceFileUploadUrlInput implements CreateWorkspaceFileUploadUrlInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $fileName,
        /** @var int */
        private readonly int $fileSizeBytes,
        /** @var \Plain\Generated\WorkspaceFileVisibility */
        private readonly WorkspaceFileVisibility $visibility,
    ) {
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getFileSizeBytes(): int
    {
        return $this->fileSizeBytes;
    }

    public function getVisibility(): WorkspaceFileVisibility
    {
        return $this->visibility;
    }
}
