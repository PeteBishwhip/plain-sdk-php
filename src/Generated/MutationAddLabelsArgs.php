<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddLabelsArgs implements MutationAddLabelsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddLabelsInput */
        private readonly AddLabelsInput $input,
    ) {
    }

    public function getInput(): AddLabelsInput
    {
        return $this->input;
    }
}
