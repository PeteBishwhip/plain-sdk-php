<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateNoteInput implements CreateNoteInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var string */
        private readonly string $text,
        /** @var string|null */
        private readonly string|null $threadId = null,
        /** @var string|null */
        private readonly string|null $markdown = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getThreadId(): string|null
    {
        return $this->threadId;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getMarkdown(): string|null
    {
        return $this->markdown;
    }

    public function getAttachmentIds(): iterable|null
    {
        return $this->attachmentIds;
    }
}
