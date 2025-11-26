<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class BeforeBreachActionInput implements BeforeBreachActionInputInterface
{
    public function __construct(
        /** @var int */
        private readonly int $beforeBreachMinutes,
    ) {
    }

    public function getBeforeBreachMinutes(): int
    {
        return $this->beforeBreachMinutes;
    }
}
