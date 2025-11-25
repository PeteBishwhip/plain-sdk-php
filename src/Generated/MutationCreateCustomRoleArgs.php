<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateCustomRoleArgs implements MutationCreateCustomRoleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateCustomRoleInput */
        private readonly CreateCustomRoleInput $input,
    ) {
    }

    public function getInput(): CreateCustomRoleInput
    {
        return $this->input;
    }
}
