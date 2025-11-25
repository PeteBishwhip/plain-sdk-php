<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class BusinessHoursWeekDaysInput implements BusinessHoursWeekDaysInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\BusinessHoursWeekDayInput|null */
        private readonly BusinessHoursWeekDayInput|null $monday = null,
        /** @var \Plain\Generated\BusinessHoursWeekDayInput|null */
        private readonly BusinessHoursWeekDayInput|null $tuesday = null,
        /** @var \Plain\Generated\BusinessHoursWeekDayInput|null */
        private readonly BusinessHoursWeekDayInput|null $wednesday = null,
        /** @var \Plain\Generated\BusinessHoursWeekDayInput|null */
        private readonly BusinessHoursWeekDayInput|null $thursday = null,
        /** @var \Plain\Generated\BusinessHoursWeekDayInput|null */
        private readonly BusinessHoursWeekDayInput|null $friday = null,
        /** @var \Plain\Generated\BusinessHoursWeekDayInput|null */
        private readonly BusinessHoursWeekDayInput|null $saturday = null,
        /** @var \Plain\Generated\BusinessHoursWeekDayInput|null */
        private readonly BusinessHoursWeekDayInput|null $sunday = null,
    ) {
    }

    public function getMonday(): BusinessHoursWeekDayInput|null
    {
        return $this->monday;
    }

    public function getTuesday(): BusinessHoursWeekDayInput|null
    {
        return $this->tuesday;
    }

    public function getWednesday(): BusinessHoursWeekDayInput|null
    {
        return $this->wednesday;
    }

    public function getThursday(): BusinessHoursWeekDayInput|null
    {
        return $this->thursday;
    }

    public function getFriday(): BusinessHoursWeekDayInput|null
    {
        return $this->friday;
    }

    public function getSaturday(): BusinessHoursWeekDayInput|null
    {
        return $this->saturday;
    }

    public function getSunday(): BusinessHoursWeekDayInput|null
    {
        return $this->sunday;
    }
}
