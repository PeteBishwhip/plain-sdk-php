<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteUserArgs implements MutationDeleteUserArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteUserInput */
        private readonly DeleteUserInput $input,
    ) {
    }

    public function getInput(): DeleteUserInput
    {
        return $this->input;
    }
}
