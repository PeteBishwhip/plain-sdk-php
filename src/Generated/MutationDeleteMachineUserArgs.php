<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteMachineUserArgs implements MutationDeleteMachineUserArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteMachineUserInput */
        private readonly DeleteMachineUserInput $input,
    ) {
    }

    public function getInput(): DeleteMachineUserInput
    {
        return $this->input;
    }
}
