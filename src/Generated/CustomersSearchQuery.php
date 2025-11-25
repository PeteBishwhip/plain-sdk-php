<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomersSearchQuery implements CustomersSearchQueryInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\CustomerSearchCondition>|null */
        private readonly iterable|null $or = null,
    ) {
    }

    public function getOr(): iterable|null
    {
        return $this->or;
    }
}
