<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class RoleFilter implements RoleFilterInterface
{
    public function __construct(
        /** @var int|null */
        private readonly int|null $version = null,
    ) {
    }

    public function getVersion(): int|null
    {
        return $this->version;
    }
}
