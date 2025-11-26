<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteCustomerGroupArgs implements MutationDeleteCustomerGroupArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteCustomerGroupInput */
        private readonly DeleteCustomerGroupInput $input,
    ) {
    }

    public function getInput(): DeleteCustomerGroupInput
    {
        return $this->input;
    }
}
