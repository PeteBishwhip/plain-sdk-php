<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateCustomerSurveyArgs implements MutationCreateCustomerSurveyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateCustomerSurveyInput */
        private readonly CreateCustomerSurveyInput $input,
    ) {
    }

    public function getInput(): CreateCustomerSurveyInput
    {
        return $this->input;
    }
}
