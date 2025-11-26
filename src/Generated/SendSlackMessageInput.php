<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SendSlackMessageInput implements SendSlackMessageInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $markdownContent,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
        /** @var bool|null */
        private readonly bool|null $unfurlLinks = null,
        /** @var bool|null */
        private readonly bool|null $replyBroadcast = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getMarkdownContent(): string
    {
        return $this->markdownContent;
    }

    public function getAttachmentIds(): iterable|null
    {
        return $this->attachmentIds;
    }

    public function getUnfurlLinks(): bool|null
    {
        return $this->unfurlLinks;
    }

    public function getReplyBroadcast(): bool|null
    {
        return $this->replyBroadcast;
    }
}
