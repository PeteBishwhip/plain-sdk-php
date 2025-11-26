<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateThreadDiscussionInput implements CreateThreadDiscussionInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $markdownContent,
        /** @var \Plain\Generated\ThreadDiscussionType */
        private readonly ThreadDiscussionType $type,
        /** @var \Plain\Generated\ThreadDiscussionSlackDetailsInput|null */
        private readonly ThreadDiscussionSlackDetailsInput|null $slackDetails = null,
        /** @var \Plain\Generated\ThreadDiscussionEmailDetailsInput|null */
        private readonly ThreadDiscussionEmailDetailsInput|null $emailDetails = null,
        /** @var \Plain\Generated\ThreadDiscussionCursorDetailsInput|null */
        private readonly ThreadDiscussionCursorDetailsInput|null $cursorDetails = null,
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

    public function getType(): ThreadDiscussionType
    {
        return $this->type;
    }

    public function getSlackDetails(): ThreadDiscussionSlackDetailsInput|null
    {
        return $this->slackDetails;
    }

    public function getEmailDetails(): ThreadDiscussionEmailDetailsInput|null
    {
        return $this->emailDetails;
    }

    public function getCursorDetails(): ThreadDiscussionCursorDetailsInput|null
    {
        return $this->cursorDetails;
    }
}
