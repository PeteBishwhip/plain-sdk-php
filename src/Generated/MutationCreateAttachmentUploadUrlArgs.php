<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateAttachmentUploadUrlArgs implements MutationCreateAttachmentUploadUrlArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateAttachmentUploadUrlInput */
        private readonly CreateAttachmentUploadUrlInput $input,
    ) {
    }

    public function getInput(): CreateAttachmentUploadUrlInput
    {
        return $this->input;
    }
}
