<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryWorkspaceMSTeamsInstallationInfoArgs implements QueryWorkspaceMSTeamsInstallationInfoArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $redirectUrl,
    ) {
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }
}
