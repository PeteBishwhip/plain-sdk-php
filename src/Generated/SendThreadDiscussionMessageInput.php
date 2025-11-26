<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SendThreadDiscussionMessageInput implements SendThreadDiscussionMessageInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadDiscussionId,
        /** @var string */
        private readonly string $markdownContent,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
    ) {
    }

    public function getThreadDiscussionId(): string
    {
        return $this->threadDiscussionId;
    }

    public function getMarkdownContent(): string
    {
        return $this->markdownContent;
    }

    public function getAttachmentIds(): iterable|null
    {
        return $this->attachmentIds;
    }
}
