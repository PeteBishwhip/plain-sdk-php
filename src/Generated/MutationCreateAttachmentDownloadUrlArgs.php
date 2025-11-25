<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateAttachmentDownloadUrlArgs implements MutationCreateAttachmentDownloadUrlArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateAttachmentDownloadUrlInput */
        private readonly CreateAttachmentDownloadUrlInput $input,
    ) {
    }

    public function getInput(): CreateAttachmentDownloadUrlInput
    {
        return $this->input;
    }
}
