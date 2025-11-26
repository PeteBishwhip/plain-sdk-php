<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryMySlackInstallationInfoArgs implements QueryMySlackInstallationInfoArgsInterface
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
