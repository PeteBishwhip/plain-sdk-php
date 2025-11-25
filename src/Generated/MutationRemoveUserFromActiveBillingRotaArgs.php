<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveUserFromActiveBillingRotaArgs implements MutationRemoveUserFromActiveBillingRotaArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveUserFromActiveBillingRotaInput */
        private readonly RemoveUserFromActiveBillingRotaInput $input,
    ) {
    }

    public function getInput(): RemoveUserFromActiveBillingRotaInput
    {
        return $this->input;
    }
}
