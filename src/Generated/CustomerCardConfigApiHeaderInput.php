<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerCardConfigApiHeaderInput implements CustomerCardConfigApiHeaderInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $value,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
