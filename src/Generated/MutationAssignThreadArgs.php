<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAssignThreadArgs implements MutationAssignThreadArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AssignThreadInput */
        private readonly AssignThreadInput $input,
    ) {
    }

    public function getInput(): AssignThreadInput
    {
        return $this->input;
    }
}
