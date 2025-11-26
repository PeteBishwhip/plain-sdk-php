<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateThreadTenantInput implements UpdateThreadTenantInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var \Plain\Generated\TenantIdentifierInput|null */
        private readonly TenantIdentifierInput|null $tenantIdentifier = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getTenantIdentifier(): TenantIdentifierInput|null
    {
        return $this->tenantIdentifier;
    }
}
