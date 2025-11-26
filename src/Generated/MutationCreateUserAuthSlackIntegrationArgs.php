<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateUserAuthSlackIntegrationArgs implements MutationCreateUserAuthSlackIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateUserAuthSlackIntegrationInput */
        private readonly CreateUserAuthSlackIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateUserAuthSlackIntegrationInput
    {
        return $this->input;
    }
}
