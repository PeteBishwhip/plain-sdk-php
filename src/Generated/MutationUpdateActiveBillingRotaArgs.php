<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateActiveBillingRotaArgs implements MutationUpdateActiveBillingRotaArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateActiveBillingRotaInput */
        private readonly UpdateActiveBillingRotaInput $input,
    ) {
    }

    public function getInput(): UpdateActiveBillingRotaInput
    {
        return $this->input;
    }
}
