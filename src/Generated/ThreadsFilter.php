<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadsFilter implements ThreadsFilterInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $threadIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $refs = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $labelTypeIds = null,
        /** @var iterable<int, int>|null */
        private readonly iterable|null $priorities = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $customerIds = null,
        /** @var bool|null */
        private readonly bool|null $isAssigned = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $assignedToUser = null,
        /** @var bool|null */
        private readonly bool|null $isMarkedAsSpam = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $supportEmailAddresses = null,
        /** @var iterable<int, \Plain\Generated\CustomerGroupIdentifier>|null */
        private readonly iterable|null $customerGroupIdentifiers = null,
        /** @var \Plain\Generated\ServiceLevelAgreementFilter|null */
        private readonly ServiceLevelAgreementFilter|null $serviceLevelAgreements = null,
        /** @var iterable<int, \Plain\Generated\TierIdentifierInput>|null */
        private readonly iterable|null $tierIdentifiers = null,
        /** @var iterable<int, \Plain\Generated\ThreadFieldFilter>|null */
        private readonly iterable|null $threadFields = null,
        /** @var iterable<int, \Plain\Generated\TenantIdentifierInput>|null */
        private readonly iterable|null $tenantIdentifiers = null,
        /** @var iterable<int, \Plain\Generated\CompanyIdentifierInput>|null */
        private readonly iterable|null $companyIdentifiers = null,
        /** @var iterable<int, \Plain\Generated\MessageSource>|null */
        private readonly iterable|null $messageSource = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $participantIds = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $statusChangedAt = null,
        /** @var iterable<int, \Plain\Generated\ThreadStatus>|null */
        private readonly iterable|null $statuses = null,
        /** @var iterable<int, \Plain\Generated\StatusDetailType>|null */
        private readonly iterable|null $statusDetails = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $threadLinkGroupIds = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $createdAt = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $updatedAt = null,
        /** @var \Plain\Generated\SurveyResponseFilter|null */
        private readonly SurveyResponseFilter|null $surveyResponse = null,
        /** @var iterable<int, \Plain\Generated\TenantFieldFilter>|null */
        private readonly iterable|null $tenantFields = null,
        /** @var \Plain\Generated\AgentStatusFilter|null */
        private readonly AgentStatusFilter|null $agentStatus = null,
    ) {
    }

    public function getThreadIds(): iterable|null
    {
        return $this->threadIds;
    }

    public function getRefs(): iterable|null
    {
        return $this->refs;
    }

    public function getLabelTypeIds(): iterable|null
    {
        return $this->labelTypeIds;
    }

    public function getPriorities(): iterable|null
    {
        return $this->priorities;
    }

    public function getCustomerIds(): iterable|null
    {
        return $this->customerIds;
    }

    public function getIsAssigned(): bool|null
    {
        return $this->isAssigned;
    }

    public function getAssignedToUser(): iterable|null
    {
        return $this->assignedToUser;
    }

    public function getIsMarkedAsSpam(): bool|null
    {
        return $this->isMarkedAsSpam;
    }

    public function getSupportEmailAddresses(): iterable|null
    {
        return $this->supportEmailAddresses;
    }

    public function getCustomerGroupIdentifiers(): iterable|null
    {
        return $this->customerGroupIdentifiers;
    }

    public function getServiceLevelAgreements(): ServiceLevelAgreementFilter|null
    {
        return $this->serviceLevelAgreements;
    }

    public function getTierIdentifiers(): iterable|null
    {
        return $this->tierIdentifiers;
    }

    public function getThreadFields(): iterable|null
    {
        return $this->threadFields;
    }

    public function getTenantIdentifiers(): iterable|null
    {
        return $this->tenantIdentifiers;
    }

    public function getCompanyIdentifiers(): iterable|null
    {
        return $this->companyIdentifiers;
    }

    public function getMessageSource(): iterable|null
    {
        return $this->messageSource;
    }

    public function getParticipantIds(): iterable|null
    {
        return $this->participantIds;
    }

    public function getStatusChangedAt(): DatetimeFilter|null
    {
        return $this->statusChangedAt;
    }

    public function getStatuses(): iterable|null
    {
        return $this->statuses;
    }

    public function getStatusDetails(): iterable|null
    {
        return $this->statusDetails;
    }

    public function getThreadLinkGroupIds(): iterable|null
    {
        return $this->threadLinkGroupIds;
    }

    public function getCreatedAt(): DatetimeFilter|null
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DatetimeFilter|null
    {
        return $this->updatedAt;
    }

    public function getSurveyResponse(): SurveyResponseFilter|null
    {
        return $this->surveyResponse;
    }

    public function getTenantFields(): iterable|null
    {
        return $this->tenantFields;
    }

    public function getAgentStatus(): AgentStatusFilter|null
    {
        return $this->agentStatus;
    }
}
