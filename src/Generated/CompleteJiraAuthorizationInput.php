<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CompleteJiraAuthorizationInput implements CompleteJiraAuthorizationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $refreshToken,
        /** @var string */
        private readonly string $siteId,
    ) {
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function getSiteId(): string
    {
        return $this->siteId;
    }
}
