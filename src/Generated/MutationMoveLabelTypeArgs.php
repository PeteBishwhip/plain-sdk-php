<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationMoveLabelTypeArgs implements MutationMoveLabelTypeArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\MoveLabelTypeInput */
        private readonly MoveLabelTypeInput $input,
    ) {
    }

    public function getInput(): MoveLabelTypeInput
    {
        return $this->input;
    }
}
