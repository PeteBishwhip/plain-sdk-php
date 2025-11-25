<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationMarkThreadAsDoneArgs implements MutationMarkThreadAsDoneArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\MarkThreadAsDoneInput */
        private readonly MarkThreadAsDoneInput $input,
    ) {
    }

    public function getInput(): MarkThreadAsDoneInput
    {
        return $this->input;
    }
}
