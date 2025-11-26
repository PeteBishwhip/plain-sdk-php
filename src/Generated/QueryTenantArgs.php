<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryTenantArgs implements QueryTenantArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $tenantId,
    ) {
    }

    public function getTenantId(): string
    {
        return $this->tenantId;
    }
}
