<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class WorkosConnectAuthMechanismInput implements WorkosConnectAuthMechanismInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $appClientId,
        /** @var string */
        private readonly string $appSecret,
        /** @var string */
        private readonly string $apiHost,
    ) {
    }

    public function getAppClientId(): string
    {
        return $this->appClientId;
    }

    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    public function getApiHost(): string
    {
        return $this->apiHost;
    }
}
