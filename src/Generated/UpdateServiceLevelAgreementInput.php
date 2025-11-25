<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateServiceLevelAgreementInput implements UpdateServiceLevelAgreementInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $serviceLevelAgreementId,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $firstResponseTimeMinutes = null,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $nextResponseTimeMinutes = null,
        /** @var \Plain\Generated\IntArrayInput|null */
        private readonly IntArrayInput|null $threadPriorityFilter = null,
        /** @var \Plain\Generated\ServiceLevelAgreementThreadLabelTypeIdFilterInput|null */
        private readonly ServiceLevelAgreementThreadLabelTypeIdFilterInput|null $threadLabelTypeIdFilter = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $useBusinessHoursOnly = null,
        /** @var iterable<int, \Plain\Generated\BreachActionInput>|null */
        private readonly iterable|null $breachActions = null,
    ) {
    }

    public function getServiceLevelAgreementId(): string
    {
        return $this->serviceLevelAgreementId;
    }

    public function getFirstResponseTimeMinutes(): IntInput|null
    {
        return $this->firstResponseTimeMinutes;
    }

    public function getNextResponseTimeMinutes(): IntInput|null
    {
        return $this->nextResponseTimeMinutes;
    }

    public function getThreadPriorityFilter(): IntArrayInput|null
    {
        return $this->threadPriorityFilter;
    }

    public function getThreadLabelTypeIdFilter(): ServiceLevelAgreementThreadLabelTypeIdFilterInput|null
    {
        return $this->threadLabelTypeIdFilter;
    }

    public function getUseBusinessHoursOnly(): BooleanInput|null
    {
        return $this->useBusinessHoursOnly;
    }

    public function getBreachActions(): iterable|null
    {
        return $this->breachActions;
    }
}
