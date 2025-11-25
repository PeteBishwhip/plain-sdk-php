<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteTierInput implements DeleteTierInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $tierId,
    ) {
    }

    public function getTierId(): string
    {
        return $this->tierId;
    }
}
