<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateAttachmentDownloadUrlInput implements CreateAttachmentDownloadUrlInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $attachmentId,
    ) {
    }

    public function getAttachmentId(): string
    {
        return $this->attachmentId;
    }
}
