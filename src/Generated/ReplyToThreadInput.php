<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReplyToThreadInput implements ReplyToThreadInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $textContent,
        /** @var string|null */
        private readonly string|null $markdownContent = null,
        /** @var \Plain\Generated\ImpersonationInput|null */
        private readonly ImpersonationInput|null $impersonation = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
        /** @var \Plain\Generated\ReplyToThreadChannelSpecificOptionsInput|null */
        private readonly ReplyToThreadChannelSpecificOptionsInput|null $channelSpecificOptions = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getTextContent(): string
    {
        return $this->textContent;
    }

    public function getMarkdownContent(): string|null
    {
        return $this->markdownContent;
    }

    public function getImpersonation(): ImpersonationInput|null
    {
        return $this->impersonation;
    }

    public function getAttachmentIds(): iterable|null
    {
        return $this->attachmentIds;
    }

    public function getChannelSpecificOptions(): ReplyToThreadChannelSpecificOptionsInput|null
    {
        return $this->channelSpecificOptions;
    }
}
