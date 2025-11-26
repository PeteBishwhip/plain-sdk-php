<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateCustomerSurveyInput implements CreateCustomerSurveyInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var \Plain\Generated\CustomerSurveyTemplateInput */
        private readonly CustomerSurveyTemplateInput $template,
        /** @var bool */
        private readonly bool $isEnabled,
        /** @var iterable<int, \Plain\Generated\CustomerSurveyConditionInput>|null */
        private readonly iterable|null $conditions = null,
        /** @var int|null */
        private readonly int|null $responseDelayMinutes = null,
        /** @var int|null */
        private readonly int|null $customerIntervalDays = null,
        /** @var int|null */
        private readonly int|null $order = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getConditions(): iterable|null
    {
        return $this->conditions;
    }

    public function getTemplate(): CustomerSurveyTemplateInput
    {
        return $this->template;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getResponseDelayMinutes(): int|null
    {
        return $this->responseDelayMinutes;
    }

    public function getCustomerIntervalDays(): int|null
    {
        return $this->customerIntervalDays;
    }

    public function getOrder(): int|null
    {
        return $this->order;
    }
}
