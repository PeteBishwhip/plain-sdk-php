<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class IntArrayInput implements IntArrayInputInterface
{
    public function __construct(
        /** @var iterable<int, int> */
        private readonly iterable $value,
    ) {
    }

    public function getValue(): iterable
    {
        return $this->value;
    }
}
