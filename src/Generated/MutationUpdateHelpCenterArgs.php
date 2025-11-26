<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateHelpCenterArgs implements MutationUpdateHelpCenterArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateHelpCenterInput */
        private readonly UpdateHelpCenterInput $input,
    ) {
    }

    public function getInput(): UpdateHelpCenterInput
    {
        return $this->input;
    }
}
