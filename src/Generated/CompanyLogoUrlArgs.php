<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CompanyLogoUrlArgs implements CompanyLogoUrlArgsInterface
{
    public function __construct(
        /** @var int|null */
        private readonly int|null $size = null,
    ) {
    }

    public function getSize(): int|null
    {
        return $this->size;
    }
}
