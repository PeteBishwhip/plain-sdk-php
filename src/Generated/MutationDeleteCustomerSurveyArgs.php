<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteCustomerSurveyArgs implements MutationDeleteCustomerSurveyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteCustomerSurveyInput */
        private readonly DeleteCustomerSurveyInput $input,
    ) {
    }

    public function getInput(): DeleteCustomerSurveyInput
    {
        return $this->input;
    }
}
