<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateWorkspaceCursorIntegrationInput implements CreateWorkspaceCursorIntegrationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $token,
    ) {
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
