<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateIssueTrackerIssueArgs implements MutationCreateIssueTrackerIssueArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateIssueTrackerIssueInput */
        private readonly CreateIssueTrackerIssueInput $input,
    ) {
    }

    public function getInput(): CreateIssueTrackerIssueInput
    {
        return $this->input;
    }
}
