<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceFileUploadUrlArgs implements MutationCreateWorkspaceFileUploadUrlArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceFileUploadUrlInput */
        private readonly CreateWorkspaceFileUploadUrlInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceFileUploadUrlInput
    {
        return $this->input;
    }
}
