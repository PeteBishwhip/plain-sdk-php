<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveCustomerFromCustomerGroupsArgs implements MutationRemoveCustomerFromCustomerGroupsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveCustomerFromCustomerGroupsInput */
        private readonly RemoveCustomerFromCustomerGroupsInput $input,
    ) {
    }

    public function getInput(): RemoveCustomerFromCustomerGroupsInput
    {
        return $this->input;
    }
}
