<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryThreadClustersArgs implements QueryThreadClustersArgsInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $variant = null,
    ) {
    }

    public function getVariant(): string|null
    {
        return $this->variant;
    }
}
