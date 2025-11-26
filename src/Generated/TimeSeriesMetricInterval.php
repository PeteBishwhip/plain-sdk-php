<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TimeSeriesMetricInterval implements TimeSeriesMetricIntervalInterface
{
    public function __construct(
        /** @var \Plain\Generated\TimeSeriesMetricIntervalUnit|null */
        private readonly TimeSeriesMetricIntervalUnit|null $unit = null,
    ) {
    }

    public function getUnit(): TimeSeriesMetricIntervalUnit|null
    {
        return $this->unit;
    }
}
