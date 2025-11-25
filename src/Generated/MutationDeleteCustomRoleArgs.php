<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteCustomRoleArgs implements MutationDeleteCustomRoleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteCustomRoleInput */
        private readonly DeleteCustomRoleInput $input,
    ) {
    }

    public function getInput(): DeleteCustomRoleInput
    {
        return $this->input;
    }
}
