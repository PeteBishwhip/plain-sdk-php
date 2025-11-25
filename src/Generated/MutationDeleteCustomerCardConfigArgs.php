<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteCustomerCardConfigArgs implements MutationDeleteCustomerCardConfigArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteCustomerCardConfigInput */
        private readonly DeleteCustomerCardConfigInput $input,
    ) {
    }

    public function getInput(): DeleteCustomerCardConfigInput
    {
        return $this->input;
    }
}
