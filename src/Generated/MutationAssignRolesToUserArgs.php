<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAssignRolesToUserArgs implements MutationAssignRolesToUserArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AssignRolesToUserInput */
        private readonly AssignRolesToUserInput $input,
    ) {
    }

    public function getInput(): AssignRolesToUserInput
    {
        return $this->input;
    }
}
