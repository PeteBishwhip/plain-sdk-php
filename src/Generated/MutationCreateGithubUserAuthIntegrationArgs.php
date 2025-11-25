<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateGithubUserAuthIntegrationArgs implements MutationCreateGithubUserAuthIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateGithubUserAuthIntegrationInput */
        private readonly CreateGithubUserAuthIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateGithubUserAuthIntegrationInput
    {
        return $this->input;
    }
}
