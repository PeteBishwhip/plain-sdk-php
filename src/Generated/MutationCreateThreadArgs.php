<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateThreadArgs implements MutationCreateThreadArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateThreadInput */
        private readonly CreateThreadInput $input,
    ) {
    }

    public function getInput(): CreateThreadInput
    {
        return $this->input;
    }
}
