<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerSurveyConditionInput implements CustomerSurveyConditionInputInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $tierIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $supportEmailAddresses = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $labelTypeIds = null,
        /** @var iterable<int, int>|null */
        private readonly iterable|null $priorities = null,
        /** @var iterable<int, \Plain\Generated\MessageSource>|null */
        private readonly iterable|null $messageSource = null,
    ) {
    }

    public function getTierIds(): iterable|null
    {
        return $this->tierIds;
    }

    public function getSupportEmailAddresses(): iterable|null
    {
        return $this->supportEmailAddresses;
    }

    public function getLabelTypeIds(): iterable|null
    {
        return $this->labelTypeIds;
    }

    public function getPriorities(): iterable|null
    {
        return $this->priorities;
    }

    public function getMessageSource(): iterable|null
    {
        return $this->messageSource;
    }
}
