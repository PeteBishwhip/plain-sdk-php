<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class BusinessHoursSlotInput implements BusinessHoursSlotInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $timezone,
        /** @var \Plain\Generated\WeekDay */
        private readonly WeekDay $weekday,
        /** @var string */
        private readonly string $opensAt,
        /** @var string */
        private readonly string $closesAt,
    ) {
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }

    public function getWeekday(): WeekDay
    {
        return $this->weekday;
    }

    public function getOpensAt(): string
    {
        return $this->opensAt;
    }

    public function getClosesAt(): string
    {
        return $this->closesAt;
    }
}
