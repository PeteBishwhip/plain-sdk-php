<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationChangeUserStatusArgs implements MutationChangeUserStatusArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ChangeUserStatusInput */
        private readonly ChangeUserStatusInput $input,
    ) {
    }

    public function getInput(): ChangeUserStatusInput
    {
        return $this->input;
    }
}
