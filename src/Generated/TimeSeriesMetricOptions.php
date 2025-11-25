<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TimeSeriesMetricOptions implements TimeSeriesMetricOptionsInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $from = null,
        /** @var string|null */
        private readonly string|null $to = null,
        /** @var \Plain\Generated\TimeSeriesMetricDimensionType|null */
        private readonly TimeSeriesMetricDimensionType|null $dimension = null,
        /** @var string|null */
        private readonly string|null $subDimension = null,
        /** @var \Plain\Generated\TimeSeriesMetricInterval|null */
        private readonly TimeSeriesMetricInterval|null $interval = null,
        /** @var \Plain\Generated\TimeSeriesMetricFilters|null */
        private readonly TimeSeriesMetricFilters|null $filters = null,
        /** @var bool|null */
        private readonly bool|null $fetchThreadIds = null,
    ) {
    }

    public function getFrom(): string|null
    {
        return $this->from;
    }

    public function getTo(): string|null
    {
        return $this->to;
    }

    public function getDimension(): TimeSeriesMetricDimensionType|null
    {
        return $this->dimension;
    }

    public function getSubDimension(): string|null
    {
        return $this->subDimension;
    }

    public function getInterval(): TimeSeriesMetricInterval|null
    {
        return $this->interval;
    }

    public function getFilters(): TimeSeriesMetricFilters|null
    {
        return $this->filters;
    }

    public function getFetchThreadIds(): bool|null
    {
        return $this->fetchThreadIds;
    }
}
