<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteNoteArgs implements MutationDeleteNoteArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteNoteInput */
        private readonly DeleteNoteInput $input,
    ) {
    }

    public function getInput(): DeleteNoteInput
    {
        return $this->input;
    }
}
