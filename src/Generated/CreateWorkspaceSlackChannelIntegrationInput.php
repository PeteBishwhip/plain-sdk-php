<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateWorkspaceSlackChannelIntegrationInput implements CreateWorkspaceSlackChannelIntegrationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $authCode,
        /** @var string */
        private readonly string $redirectUrl,
    ) {
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }
}
