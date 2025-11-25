<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateCustomerCompanyArgs implements MutationUpdateCustomerCompanyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateCustomerCompanyInput */
        private readonly UpdateCustomerCompanyInput $input,
    ) {
    }

    public function getInput(): UpdateCustomerCompanyInput
    {
        return $this->input;
    }
}
