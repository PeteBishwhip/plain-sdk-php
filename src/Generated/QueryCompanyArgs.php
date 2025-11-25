<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryCompanyArgs implements QueryCompanyArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $companyId,
    ) {
    }

    public function getCompanyId(): string
    {
        return $this->companyId;
    }
}
