<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateNoteArgs implements MutationCreateNoteArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateNoteInput */
        private readonly CreateNoteInput $input,
    ) {
    }

    public function getInput(): CreateNoteInput
    {
        return $this->input;
    }
}
