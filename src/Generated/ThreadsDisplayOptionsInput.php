<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadsDisplayOptionsInput implements ThreadsDisplayOptionsInputInterface
{
    public function __construct(
        /** @var bool */
        private readonly bool $hasStatus,
        /** @var bool */
        private readonly bool $hasCustomer,
        /** @var bool */
        private readonly bool $hasCompany,
        /** @var bool */
        private readonly bool $hasPreviewText,
        /** @var bool */
        private readonly bool $hasTier,
        /** @var bool */
        private readonly bool $hasCustomerGroups,
        /** @var bool */
        private readonly bool $hasLabels,
        /** @var bool */
        private readonly bool $hasLinkedThreads,
        /** @var bool */
        private readonly bool $hasServiceLevelAgreements,
        /** @var bool */
        private readonly bool $hasChannels,
        /** @var bool */
        private readonly bool $hasLastUpdated,
        /** @var bool */
        private readonly bool $hasAssignees,
        /** @var bool */
        private readonly bool $hasRef,
        /** @var bool|null */
        private readonly bool|null $hasLinearIssues = null,
        /** @var bool|null */
        private readonly bool|null $hasJiraIssues = null,
        /** @var bool|null */
        private readonly bool|null $hasIssueTrackerIssues = null,
    ) {
    }

    public function getHasStatus(): bool
    {
        return $this->hasStatus;
    }

    public function getHasCustomer(): bool
    {
        return $this->hasCustomer;
    }

    public function getHasCompany(): bool
    {
        return $this->hasCompany;
    }

    public function getHasPreviewText(): bool
    {
        return $this->hasPreviewText;
    }

    public function getHasTier(): bool
    {
        return $this->hasTier;
    }

    public function getHasCustomerGroups(): bool
    {
        return $this->hasCustomerGroups;
    }

    public function getHasLabels(): bool
    {
        return $this->hasLabels;
    }

    public function getHasLinearIssues(): bool|null
    {
        return $this->hasLinearIssues;
    }

    public function getHasJiraIssues(): bool|null
    {
        return $this->hasJiraIssues;
    }

    public function getHasLinkedThreads(): bool
    {
        return $this->hasLinkedThreads;
    }

    public function getHasServiceLevelAgreements(): bool
    {
        return $this->hasServiceLevelAgreements;
    }

    public function getHasChannels(): bool
    {
        return $this->hasChannels;
    }

    public function getHasLastUpdated(): bool
    {
        return $this->hasLastUpdated;
    }

    public function getHasAssignees(): bool
    {
        return $this->hasAssignees;
    }

    public function getHasRef(): bool
    {
        return $this->hasRef;
    }

    public function getHasIssueTrackerIssues(): bool|null
    {
        return $this->hasIssueTrackerIssues;
    }
}
