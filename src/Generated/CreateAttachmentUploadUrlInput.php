<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateAttachmentUploadUrlInput implements CreateAttachmentUploadUrlInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var string */
        private readonly string $fileName,
        /** @var int */
        private readonly int $fileSizeBytes,
        /** @var \Plain\Generated\AttachmentType */
        private readonly AttachmentType $attachmentType,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getFileSizeBytes(): int
    {
        return $this->fileSizeBytes;
    }

    public function getAttachmentType(): AttachmentType
    {
        return $this->attachmentType;
    }
}
