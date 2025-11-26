<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteNoteInput implements DeleteNoteInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $noteId,
    ) {
    }

    public function getNoteId(): string
    {
        return $this->noteId;
    }
}
