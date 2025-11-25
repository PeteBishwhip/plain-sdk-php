<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryMyMSTeamsInstallationInfoArgs implements QueryMyMSTeamsInstallationInfoArgsInterface
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
