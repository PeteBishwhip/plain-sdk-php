<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUnassignThreadArgs implements MutationUnassignThreadArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UnassignThreadInput */
        private readonly UnassignThreadInput $input,
    ) {
    }

    public function getInput(): UnassignThreadInput
    {
        return $this->input;
    }
}
