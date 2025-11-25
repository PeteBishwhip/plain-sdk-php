<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryThreadByExternalIdArgs implements QueryThreadByExternalIdArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerId,
        /** @var string */
        private readonly string $externalId,
    ) {
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }
}
