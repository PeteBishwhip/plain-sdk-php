<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateLabelTypeArgs implements MutationCreateLabelTypeArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateLabelTypeInput */
        private readonly CreateLabelTypeInput $input,
    ) {
    }

    public function getInput(): CreateLabelTypeInput
    {
        return $this->input;
    }
}
