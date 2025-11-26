<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateThreadEventArgs implements MutationCreateThreadEventArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateThreadEventInput */
        private readonly CreateThreadEventInput $input,
    ) {
    }

    public function getInput(): CreateThreadEventInput
    {
        return $this->input;
    }
}
