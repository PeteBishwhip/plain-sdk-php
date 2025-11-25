<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationReorderCustomerSurveysArgs implements MutationReorderCustomerSurveysArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ReorderCustomerSurveysInput */
        private readonly ReorderCustomerSurveysInput $input,
    ) {
    }

    public function getInput(): ReorderCustomerSurveysInput
    {
        return $this->input;
    }
}
