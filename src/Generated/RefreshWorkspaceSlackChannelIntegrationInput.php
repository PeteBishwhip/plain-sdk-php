<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class RefreshWorkspaceSlackChannelIntegrationInput implements RefreshWorkspaceSlackChannelIntegrationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $integrationId,
        /** @var string */
        private readonly string $authCode,
        /** @var string */
        private readonly string $redirectUrl,
    ) {
    }

    public function getIntegrationId(): string
    {
        return $this->integrationId;
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
