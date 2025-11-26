<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateCustomerGroupArgs implements MutationCreateCustomerGroupArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateCustomerGroupInput */
        private readonly CreateCustomerGroupInput $input,
    ) {
    }

    public function getInput(): CreateCustomerGroupInput
    {
        return $this->input;
    }
}
