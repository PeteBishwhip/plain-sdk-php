<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReorderCustomerSurveysInput implements ReorderCustomerSurveysInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\CustomerSurveyOrderInput> */
        private readonly iterable $customerSurveyOrders,
    ) {
    }

    public function getCustomerSurveyOrders(): iterable
    {
        return $this->customerSurveyOrders;
    }
}
