<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ServiceAuthorizationsFilter implements ServiceAuthorizationsFilterInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $serviceIntegrationKey = null,
    ) {
    }

    public function getServiceIntegrationKey(): string|null
    {
        return $this->serviceIntegrationKey;
    }
}
