<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateCustomerSurveyInput implements UpdateCustomerSurveyInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerSurveyId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var iterable<int, \Plain\Generated\CustomerSurveyConditionInput>|null */
        private readonly iterable|null $conditions = null,
        /** @var \Plain\Generated\CustomerSurveyTemplateInput|null */
        private readonly CustomerSurveyTemplateInput|null $template = null,
        /** @var int|null */
        private readonly int|null $order = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isEnabled = null,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $responseDelayMinutes = null,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $customerIntervalDays = null,
    ) {
    }

    public function getCustomerSurveyId(): string
    {
        return $this->customerSurveyId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getConditions(): iterable|null
    {
        return $this->conditions;
    }

    public function getTemplate(): CustomerSurveyTemplateInput|null
    {
        return $this->template;
    }

    public function getOrder(): int|null
    {
        return $this->order;
    }

    public function getIsEnabled(): BooleanInput|null
    {
        return $this->isEnabled;
    }

    public function getResponseDelayMinutes(): IntInput|null
    {
        return $this->responseDelayMinutes;
    }

    public function getCustomerIntervalDays(): IntInput|null
    {
        return $this->customerIntervalDays;
    }
}
