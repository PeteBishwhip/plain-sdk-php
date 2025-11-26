<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateCustomerSurveyArgs implements MutationUpdateCustomerSurveyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateCustomerSurveyInput */
        private readonly UpdateCustomerSurveyInput $input,
    ) {
    }

    public function getInput(): UpdateCustomerSurveyInput
    {
        return $this->input;
    }
}
