<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class BooleanInput implements BooleanInputInterface
{
    public function __construct(
        /** @var bool */
        private readonly bool $value,
    ) {
    }

    public function getValue(): bool
    {
        return $this->value;
    }
}
