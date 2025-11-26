<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateCustomerGroupArgs implements MutationUpdateCustomerGroupArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateCustomerGroupInput */
        private readonly UpdateCustomerGroupInput $input,
    ) {
    }

    public function getInput(): UpdateCustomerGroupInput
    {
        return $this->input;
    }
}
