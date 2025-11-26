<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateUserAccountArgs implements MutationCreateUserAccountArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateUserAccountInput */
        private readonly CreateUserAccountInput $input,
    ) {
    }

    public function getInput(): CreateUserAccountInput
    {
        return $this->input;
    }
}
