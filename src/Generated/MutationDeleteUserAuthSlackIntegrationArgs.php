<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteUserAuthSlackIntegrationArgs implements MutationDeleteUserAuthSlackIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteUserAuthSlackIntegrationInput */
        private readonly DeleteUserAuthSlackIntegrationInput $input,
    ) {
    }

    public function getInput(): DeleteUserAuthSlackIntegrationInput
    {
        return $this->input;
    }
}
