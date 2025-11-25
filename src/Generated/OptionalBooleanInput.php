<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class OptionalBooleanInput implements OptionalBooleanInputInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $value = null,
    ) {
    }

    public function getValue(): bool|null
    {
        return $this->value;
    }
}
