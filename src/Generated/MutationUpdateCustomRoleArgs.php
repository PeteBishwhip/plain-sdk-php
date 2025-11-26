<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateCustomRoleArgs implements MutationUpdateCustomRoleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateCustomRoleInput */
        private readonly UpdateCustomRoleInput $input,
    ) {
    }

    public function getInput(): UpdateCustomRoleInput
    {
        return $this->input;
    }
}
