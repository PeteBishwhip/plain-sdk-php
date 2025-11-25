<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TenantsSearchQuery implements TenantsSearchQueryInterface
{
    public function __construct(
        /** @var string */
        private readonly string $term,
    ) {
    }

    public function getTerm(): string
    {
        return $this->term;
    }
}
