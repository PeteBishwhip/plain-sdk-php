<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateMyUserArgs implements MutationUpdateMyUserArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateMyUserInput */
        private readonly UpdateMyUserInput $input,
    ) {
    }

    public function getInput(): UpdateMyUserInput
    {
        return $this->input;
    }
}
