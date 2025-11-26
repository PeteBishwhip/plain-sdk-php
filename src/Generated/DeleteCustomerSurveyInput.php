<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteCustomerSurveyInput implements DeleteCustomerSurveyInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerSurveyId,
    ) {
    }

    public function getCustomerSurveyId(): string
    {
        return $this->customerSurveyId;
    }
}
