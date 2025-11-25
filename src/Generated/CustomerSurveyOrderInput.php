<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerSurveyOrderInput implements CustomerSurveyOrderInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerSurveyId,
        /** @var int */
        private readonly int $order,
    ) {
    }

    public function getCustomerSurveyId(): string
    {
        return $this->customerSurveyId;
    }

    public function getOrder(): int
    {
        return $this->order;
    }
}
