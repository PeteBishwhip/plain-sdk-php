<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SendChatInput implements SendChatInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var string|null */
        private readonly string|null $text = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
        /** @var string|null */
        private readonly string|null $threadId = null,
        /** @var string|null */
        private readonly string|null $timestamp = null,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getText(): string|null
    {
        return $this->text;
    }

    public function getAttachmentIds(): iterable|null
    {
        return $this->attachmentIds;
    }

    public function getThreadId(): string|null
    {
        return $this->threadId;
    }

    public function getTimestamp(): string|null
    {
        return $this->timestamp;
    }
}
