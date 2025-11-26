<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryUserAuthSlackInstallationInfoArgs implements QueryUserAuthSlackInstallationInfoArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $redirectUrl,
        /** @var string|null */
        private readonly string|null $slackTeamId = null,
    ) {
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    public function getSlackTeamId(): string|null
    {
        return $this->slackTeamId;
    }
}
