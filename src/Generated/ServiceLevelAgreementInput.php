<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ServiceLevelAgreementInput implements ServiceLevelAgreementInputInterface
{
    public function __construct(
        /** @var bool */
        private readonly bool $useBusinessHoursOnly,
        /** @var iterable<int, \Plain\Generated\BreachActionInput> */
        private readonly iterable $breachActions,
        /** @var int|null */
        private readonly int|null $firstResponseTimeMinutes = null,
        /** @var int|null */
        private readonly int|null $nextResponseTimeMinutes = null,
        /** @var iterable<int, int>|null */
        private readonly iterable|null $threadPriorityFilter = null,
        /** @var \Plain\Generated\ServiceLevelAgreementThreadLabelTypeIdFilterInput|null */
        private readonly ServiceLevelAgreementThreadLabelTypeIdFilterInput|null $threadLabelTypeIdFilter = null,
    ) {
    }

    public function getFirstResponseTimeMinutes(): int|null
    {
        return $this->firstResponseTimeMinutes;
    }

    public function getNextResponseTimeMinutes(): int|null
    {
        return $this->nextResponseTimeMinutes;
    }

    public function getThreadPriorityFilter(): iterable|null
    {
        return $this->threadPriorityFilter;
    }

    public function getThreadLabelTypeIdFilter(): ServiceLevelAgreementThreadLabelTypeIdFilterInput|null
    {
        return $this->threadLabelTypeIdFilter;
    }

    public function getUseBusinessHoursOnly(): bool
    {
        return $this->useBusinessHoursOnly;
    }

    public function getBreachActions(): iterable
    {
        return $this->breachActions;
    }
}
