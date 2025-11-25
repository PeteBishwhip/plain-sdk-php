<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SavedThreadsViewFilterInput implements SavedThreadsViewFilterInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\ThreadStatus> */
        private readonly iterable $statuses,
        /** @var iterable<int, \Plain\Generated\StatusDetailType> */
        private readonly iterable $statusDetails,
        /** @var iterable<int, int> */
        private readonly iterable $priorities,
        /** @var iterable<int, string> */
        private readonly iterable $assignedToUser,
        /** @var iterable<int, string> */
        private readonly iterable $participants,
        /** @var iterable<int, string> */
        private readonly iterable $customerGroups,
        /** @var iterable<int, string> */
        private readonly iterable $companies,
        /** @var iterable<int, string> */
        private readonly iterable $tenants,
        /** @var iterable<int, string> */
        private readonly iterable $tiers,
        /** @var iterable<int, string> */
        private readonly iterable $labelTypeIds,
        /** @var iterable<int, \Plain\Generated\MessageSource> */
        private readonly iterable $messageSource,
        /** @var iterable<int, string> */
        private readonly iterable $supportEmailAddresses,
        /** @var iterable<int, string> */
        private readonly iterable $slaTypes,
        /** @var iterable<int, string> */
        private readonly iterable $slaStatuses,
        /** @var iterable<int, \Plain\Generated\ThreadFieldFilter> */
        private readonly iterable $threadFields,
        /** @var iterable<int, \Plain\Generated\TenantFieldFilter> */
        private readonly iterable $tenantFields,
        /** @var iterable<int, string> */
        private readonly iterable $threadLinkGroupIds,
        /** @var \Plain\Generated\ThreadsSort */
        private readonly ThreadsSort $sort,
        /** @var \Plain\Generated\ThreadsDisplayOptionsInput */
        private readonly ThreadsDisplayOptionsInput $displayOptions,
        /** @var \Plain\Generated\ThreadsGroupBy */
        private readonly ThreadsGroupBy $groupBy,
        /** @var \Plain\Generated\ThreadsLayout */
        private readonly ThreadsLayout $layout,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $createdAtFilter = null,
        /** @var \Plain\Generated\SurveyResponseFilter|null */
        private readonly SurveyResponseFilter|null $surveyResponse = null,
    ) {
    }

    public function getStatuses(): iterable
    {
        return $this->statuses;
    }

    public function getStatusDetails(): iterable
    {
        return $this->statusDetails;
    }

    public function getPriorities(): iterable
    {
        return $this->priorities;
    }

    public function getAssignedToUser(): iterable
    {
        return $this->assignedToUser;
    }

    public function getParticipants(): iterable
    {
        return $this->participants;
    }

    public function getCustomerGroups(): iterable
    {
        return $this->customerGroups;
    }

    public function getCompanies(): iterable
    {
        return $this->companies;
    }

    public function getTenants(): iterable
    {
        return $this->tenants;
    }

    public function getTiers(): iterable
    {
        return $this->tiers;
    }

    public function getLabelTypeIds(): iterable
    {
        return $this->labelTypeIds;
    }

    public function getMessageSource(): iterable
    {
        return $this->messageSource;
    }

    public function getSupportEmailAddresses(): iterable
    {
        return $this->supportEmailAddresses;
    }

    public function getSlaTypes(): iterable
    {
        return $this->slaTypes;
    }

    public function getSlaStatuses(): iterable
    {
        return $this->slaStatuses;
    }

    public function getThreadFields(): iterable
    {
        return $this->threadFields;
    }

    public function getTenantFields(): iterable
    {
        return $this->tenantFields;
    }

    public function getThreadLinkGroupIds(): iterable
    {
        return $this->threadLinkGroupIds;
    }

    public function getCreatedAtFilter(): DatetimeFilter|null
    {
        return $this->createdAtFilter;
    }

    public function getSurveyResponse(): SurveyResponseFilter|null
    {
        return $this->surveyResponse;
    }

    public function getSort(): ThreadsSort
    {
        return $this->sort;
    }

    public function getDisplayOptions(): ThreadsDisplayOptionsInput
    {
        return $this->displayOptions;
    }

    public function getGroupBy(): ThreadsGroupBy
    {
        return $this->groupBy;
    }

    public function getLayout(): ThreadsLayout
    {
        return $this->layout;
    }
}
