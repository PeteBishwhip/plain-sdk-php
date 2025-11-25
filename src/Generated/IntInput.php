<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class IntInput implements IntInputInterface
{
    public function __construct(
        /** @var int */
        private readonly int $value,
    ) {
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
