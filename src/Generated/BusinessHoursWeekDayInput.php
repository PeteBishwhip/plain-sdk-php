<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class BusinessHoursWeekDayInput implements BusinessHoursWeekDayInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $startTime,
        /** @var string */
        private readonly string $endTime,
    ) {
    }

    public function getStartTime(): string
    {
        return $this->startTime;
    }

    public function getEndTime(): string
    {
        return $this->endTime;
    }
}
