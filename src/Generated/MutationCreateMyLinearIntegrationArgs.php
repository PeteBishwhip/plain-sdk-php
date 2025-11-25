<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateMyLinearIntegrationArgs implements MutationCreateMyLinearIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateMyLinearIntegrationInput */
        private readonly CreateMyLinearIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateMyLinearIntegrationInput
    {
        return $this->input;
    }
}
