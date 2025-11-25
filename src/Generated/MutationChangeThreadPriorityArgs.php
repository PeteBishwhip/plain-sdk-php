<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationChangeThreadPriorityArgs implements MutationChangeThreadPriorityArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ChangeThreadPriorityInput */
        private readonly ChangeThreadPriorityInput $input,
    ) {
    }

    public function getInput(): ChangeThreadPriorityInput
    {
        return $this->input;
    }
}
