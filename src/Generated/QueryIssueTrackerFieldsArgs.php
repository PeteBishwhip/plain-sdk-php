<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryIssueTrackerFieldsArgs implements QueryIssueTrackerFieldsArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $issueTrackerType,
        /** @var iterable<int, \Plain\Generated\SelectedIssueTrackerField> */
        private readonly iterable $selectedFields,
    ) {
    }

    public function getIssueTrackerType(): string
    {
        return $this->issueTrackerType;
    }

    public function getSelectedFields(): iterable
    {
        return $this->selectedFields;
    }
}
