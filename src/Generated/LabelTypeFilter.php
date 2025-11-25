<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class LabelTypeFilter implements LabelTypeFilterInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $isArchived = null,
    ) {
    }

    public function getIsArchived(): bool|null
    {
        return $this->isArchived;
    }
}
