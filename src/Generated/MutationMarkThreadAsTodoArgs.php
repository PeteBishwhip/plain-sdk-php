<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationMarkThreadAsTodoArgs implements MutationMarkThreadAsTodoArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\MarkThreadAsTodoInput */
        private readonly MarkThreadAsTodoInput $input,
    ) {
    }

    public function getInput(): MarkThreadAsTodoInput
    {
        return $this->input;
    }
}
