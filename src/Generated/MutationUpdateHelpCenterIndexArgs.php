<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateHelpCenterIndexArgs implements MutationUpdateHelpCenterIndexArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateHelpCenterIndexInput */
        private readonly UpdateHelpCenterIndexInput $input,
    ) {
    }

    public function getInput(): UpdateHelpCenterIndexInput
    {
        return $this->input;
    }
}
