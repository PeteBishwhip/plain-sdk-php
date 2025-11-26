<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateMySlackIntegrationArgs implements MutationCreateMySlackIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateMySlackIntegrationInput */
        private readonly CreateMySlackIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateMySlackIntegrationInput
    {
        return $this->input;
    }
}
