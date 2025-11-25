<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class OptionalStringInput implements OptionalStringInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $value = null,
    ) {
    }

    public function getValue(): string|null
    {
        return $this->value;
    }
}
