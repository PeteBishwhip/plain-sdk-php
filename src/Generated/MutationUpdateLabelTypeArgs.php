<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateLabelTypeArgs implements MutationUpdateLabelTypeArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateLabelTypeInput */
        private readonly UpdateLabelTypeInput $input,
    ) {
    }

    public function getInput(): UpdateLabelTypeInput
    {
        return $this->input;
    }
}
