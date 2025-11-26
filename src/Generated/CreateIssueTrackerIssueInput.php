<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateIssueTrackerIssueInput implements CreateIssueTrackerIssueInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $issueTrackerType,
        /** @var string */
        private readonly string $title,
        /** @var iterable<int, \Plain\Generated\IssueTrackerFieldInput> */
        private readonly iterable $fields,
        /** @var string|null */
        private readonly string|null $description = null,
    ) {
    }

    public function getIssueTrackerType(): string
    {
        return $this->issueTrackerType;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getFields(): iterable
    {
        return $this->fields;
    }
}
