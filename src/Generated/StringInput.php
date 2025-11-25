<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class StringInput implements StringInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $value,
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
