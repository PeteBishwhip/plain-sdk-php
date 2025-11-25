<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSetCustomerTenantsArgs implements MutationSetCustomerTenantsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SetCustomerTenantsInput */
        private readonly SetCustomerTenantsInput $input,
    ) {
    }

    public function getInput(): SetCustomerTenantsInput
    {
        return $this->input;
    }
}
