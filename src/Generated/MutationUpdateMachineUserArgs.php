<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateMachineUserArgs implements MutationUpdateMachineUserArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateMachineUserInput */
        private readonly UpdateMachineUserInput $input,
    ) {
    }

    public function getInput(): UpdateMachineUserInput
    {
        return $this->input;
    }
}
