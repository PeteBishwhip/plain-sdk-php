<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DatetimeFilter implements DatetimeFilterInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $after = null,
        /** @var string|null */
        private readonly string|null $before = null,
    ) {
    }

    public function getAfter(): string|null
    {
        return $this->after;
    }

    public function getBefore(): string|null
    {
        return $this->before;
    }
}
