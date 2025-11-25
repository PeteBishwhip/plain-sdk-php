<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteThreadFieldArgs implements MutationDeleteThreadFieldArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteThreadFieldInput */
        private readonly DeleteThreadFieldInput $input,
    ) {
    }

    public function getInput(): DeleteThreadFieldInput
    {
        return $this->input;
    }
}
