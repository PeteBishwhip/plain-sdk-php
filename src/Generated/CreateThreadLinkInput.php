<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateThreadLinkInput implements CreateThreadLinkInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string|null */
        private readonly string|null $sourceId = null,
        /** @var string|null */
        private readonly string|null $sourceType = null,
        /** @var \Plain\Generated\LinearIssueThreadLinkInput|null */
        private readonly LinearIssueThreadLinkInput|null $linearIssue = null,
        /** @var \Plain\Generated\PlainThreadLinkInput|null */
        private readonly PlainThreadLinkInput|null $plainThread = null,
        /** @var \Plain\Generated\JiraIssueThreadLinkInput|null */
        private readonly JiraIssueThreadLinkInput|null $jiraIssue = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getSourceId(): string|null
    {
        return $this->sourceId;
    }

    public function getSourceType(): string|null
    {
        return $this->sourceType;
    }

    public function getLinearIssue(): LinearIssueThreadLinkInput|null
    {
        return $this->linearIssue;
    }

    public function getPlainThread(): PlainThreadLinkInput|null
    {
        return $this->plainThread;
    }

    public function getJiraIssue(): JiraIssueThreadLinkInput|null
    {
        return $this->jiraIssue;
    }
}
