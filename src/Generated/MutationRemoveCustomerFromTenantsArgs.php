<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveCustomerFromTenantsArgs implements MutationRemoveCustomerFromTenantsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveCustomerFromTenantsInput */
        private readonly RemoveCustomerFromTenantsInput $input,
    ) {
    }

    public function getInput(): RemoveCustomerFromTenantsInput
    {
        return $this->input;
    }
}
