<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteHelpCenterArgs implements MutationDeleteHelpCenterArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteHelpCenterInput */
        private readonly DeleteHelpCenterInput $input,
    ) {
    }

    public function getInput(): DeleteHelpCenterInput
    {
        return $this->input;
    }
}
