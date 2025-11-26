<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteMyServiceAuthorizationInput implements DeleteMyServiceAuthorizationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $serviceAuthorizationId,
    ) {
    }

    public function getServiceAuthorizationId(): string
    {
        return $this->serviceAuthorizationId;
    }
}
