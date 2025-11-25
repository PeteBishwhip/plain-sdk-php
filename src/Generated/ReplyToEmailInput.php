<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReplyToEmailInput implements ReplyToEmailInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $inReplyToEmailId,
        /** @var string */
        private readonly string $textContent,
        /** @var string|null */
        private readonly string|null $customerId = null,
        /** @var string|null */
        private readonly string|null $subject = null,
        /** @var string|null */
        private readonly string|null $markdownContent = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
        /** @var iterable<int, \Plain\Generated\EmailParticipantInput>|null */
        private readonly iterable|null $additionalRecipients = null,
        /** @var iterable<int, \Plain\Generated\EmailParticipantInput>|null */
        private readonly iterable|null $hiddenRecipients = null,
        /** @var \Plain\Generated\EmailParticipantInput|null */
        private readonly EmailParticipantInput|null $fromAlternateSupportEmail = null,
    ) {
    }

    public function getCustomerId(): string|null
    {
        return $this->customerId;
    }

    public function getInReplyToEmailId(): string
    {
        return $this->inReplyToEmailId;
    }

    public function getSubject(): string|null
    {
        return $this->subject;
    }

    public function getTextContent(): string
    {
        return $this->textContent;
    }

    public function getMarkdownContent(): string|null
    {
        return $this->markdownContent;
    }

    public function getAttachmentIds(): iterable|null
    {
        return $this->attachmentIds;
    }

    public function getAdditionalRecipients(): iterable|null
    {
        return $this->additionalRecipients;
    }

    public function getHiddenRecipients(): iterable|null
    {
        return $this->hiddenRecipients;
    }

    public function getFromAlternateSupportEmail(): EmailParticipantInput|null
    {
        return $this->fromAlternateSupportEmail;
    }
}
