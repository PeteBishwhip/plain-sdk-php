<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class StartServiceAuthorizationInput implements StartServiceAuthorizationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $serviceIntegrationKey,
    ) {
    }

    public function getServiceIntegrationKey(): string
    {
        return $this->serviceIntegrationKey;
    }
}
