<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationChangeThreadCustomerArgs implements MutationChangeThreadCustomerArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ChangeThreadCustomerInput */
        private readonly ChangeThreadCustomerInput $input,
    ) {
    }

    public function getInput(): ChangeThreadCustomerInput
    {
        return $this->input;
    }
}
