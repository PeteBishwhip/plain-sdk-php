<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteCustomerArgs implements MutationDeleteCustomerArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteCustomerInput */
        private readonly DeleteCustomerInput $input,
    ) {
    }

    public function getInput(): DeleteCustomerInput
    {
        return $this->input;
    }
}
