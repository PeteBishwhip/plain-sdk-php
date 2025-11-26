<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateMyMSTeamsIntegrationArgs implements MutationCreateMyMSTeamsIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateMyMSTeamsIntegrationInput */
        private readonly CreateMyMSTeamsIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateMyMSTeamsIntegrationInput
    {
        return $this->input;
    }
}
