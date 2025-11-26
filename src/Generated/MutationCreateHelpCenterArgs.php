<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateHelpCenterArgs implements MutationCreateHelpCenterArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateHelpCenterInput */
        private readonly CreateHelpCenterInput $input,
    ) {
    }

    public function getInput(): CreateHelpCenterInput
    {
        return $this->input;
    }
}
