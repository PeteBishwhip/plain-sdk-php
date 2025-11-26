<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationReloadCustomerCardInstanceArgs implements MutationReloadCustomerCardInstanceArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ReloadCustomerCardInstanceInput */
        private readonly ReloadCustomerCardInstanceInput $input,
    ) {
    }

    public function getInput(): ReloadCustomerCardInstanceInput
    {
        return $this->input;
    }
}
