<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TierIdentifierInput implements TierIdentifierInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $tierId = null,
        /** @var string|null */
        private readonly string|null $externalId = null,
    ) {
    }

    public function getTierId(): string|null
    {
        return $this->tierId;
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }
}
