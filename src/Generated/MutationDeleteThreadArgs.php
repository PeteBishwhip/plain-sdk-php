<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteThreadArgs implements MutationDeleteThreadArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteThreadInput */
        private readonly DeleteThreadInput $input,
    ) {
    }

    public function getInput(): DeleteThreadInput
    {
        return $this->input;
    }
}
