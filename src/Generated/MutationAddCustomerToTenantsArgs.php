<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddCustomerToTenantsArgs implements MutationAddCustomerToTenantsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddCustomerToTenantsInput */
        private readonly AddCustomerToTenantsInput $input,
    ) {
    }

    public function getInput(): AddCustomerToTenantsInput
    {
        return $this->input;
    }
}
