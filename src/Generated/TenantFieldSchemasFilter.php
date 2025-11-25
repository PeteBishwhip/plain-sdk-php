<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TenantFieldSchemasFilter implements TenantFieldSchemasFilterInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $source = null,
    ) {
    }

    public function getSource(): string|null
    {
        return $this->source;
    }
}
