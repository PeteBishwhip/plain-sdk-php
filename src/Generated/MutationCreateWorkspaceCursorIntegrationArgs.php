<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceCursorIntegrationArgs implements MutationCreateWorkspaceCursorIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceCursorIntegrationInput */
        private readonly CreateWorkspaceCursorIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceCursorIntegrationInput
    {
        return $this->input;
    }
}
