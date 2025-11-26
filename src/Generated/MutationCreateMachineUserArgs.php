<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateMachineUserArgs implements MutationCreateMachineUserArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateMachineUserInput */
        private readonly CreateMachineUserInput $input,
    ) {
    }

    public function getInput(): CreateMachineUserInput
    {
        return $this->input;
    }
}
