<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryLabelTypeByExternalIdArgs implements QueryLabelTypeByExternalIdArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $externalId,
    ) {
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }
}
