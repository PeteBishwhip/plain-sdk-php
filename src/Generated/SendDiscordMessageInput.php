<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SendDiscordMessageInput implements SendDiscordMessageInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string|null */
        private readonly string|null $markdownContent = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getMarkdownContent(): string|null
    {
        return $this->markdownContent;
    }

    public function getAttachmentIds(): iterable|null
    {
        return $this->attachmentIds;
    }
}
