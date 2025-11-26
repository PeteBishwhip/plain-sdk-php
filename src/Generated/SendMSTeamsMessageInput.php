<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SendMSTeamsMessageInput implements SendMSTeamsMessageInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string|null */
        private readonly string|null $markdownContent = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
        /** @var iterable<int, \Plain\Generated\MentionInput>|null */
        private readonly iterable|null $mentions = null,
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

    public function getMentions(): iterable|null
    {
        return $this->mentions;
    }
}
