<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertBusinessHoursInput implements UpsertBusinessHoursInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\BusinessHoursWeekDaysInput|null */
        private readonly BusinessHoursWeekDaysInput|null $weekDays = null,
    ) {
    }

    public function getWeekDays(): BusinessHoursWeekDaysInput|null
    {
        return $this->weekDays;
    }
}
