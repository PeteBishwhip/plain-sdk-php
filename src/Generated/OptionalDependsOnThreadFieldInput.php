<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class OptionalDependsOnThreadFieldInput implements OptionalDependsOnThreadFieldInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\DependsOnThreadFieldInput|null */
        private readonly DependsOnThreadFieldInput|null $value = null,
    ) {
    }

    public function getValue(): DependsOnThreadFieldInput|null
    {
        return $this->value;
    }
}
