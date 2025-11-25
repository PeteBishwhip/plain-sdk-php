<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddLabelsToUserArgs implements MutationAddLabelsToUserArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddLabelsToUserInput */
        private readonly AddLabelsToUserInput $input,
    ) {
    }

    public function getInput(): AddLabelsToUserInput
    {
        return $this->input;
    }
}
