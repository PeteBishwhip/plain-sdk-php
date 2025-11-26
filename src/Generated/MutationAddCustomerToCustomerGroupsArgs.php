<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddCustomerToCustomerGroupsArgs implements MutationAddCustomerToCustomerGroupsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddCustomerToCustomerGroupsInput */
        private readonly AddCustomerToCustomerGroupsInput $input,
    ) {
    }

    public function getInput(): AddCustomerToCustomerGroupsInput
    {
        return $this->input;
    }
}
