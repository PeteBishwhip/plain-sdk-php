<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class JiraIssueThreadLinkInput implements JiraIssueThreadLinkInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $jiraIssueId,
    ) {
    }

    public function getJiraIssueId(): string
    {
        return $this->jiraIssueId;
    }
}
