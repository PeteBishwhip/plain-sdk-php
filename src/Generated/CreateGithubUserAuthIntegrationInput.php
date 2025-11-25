<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateGithubUserAuthIntegrationInput implements CreateGithubUserAuthIntegrationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $nangoSessionToken,
        /** @var string */
        private readonly string $nangoConnectionId,
    ) {
    }

    public function getNangoSessionToken(): string
    {
        return $this->nangoSessionToken;
    }

    public function getNangoConnectionId(): string
    {
        return $this->nangoConnectionId;
    }
}
