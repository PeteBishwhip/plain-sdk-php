<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddUserToActiveBillingRotaArgs implements MutationAddUserToActiveBillingRotaArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddUserToActiveBillingRotaInput */
        private readonly AddUserToActiveBillingRotaInput $input,
    ) {
    }

    public function getInput(): AddUserToActiveBillingRotaInput
    {
        return $this->input;
    }
}
