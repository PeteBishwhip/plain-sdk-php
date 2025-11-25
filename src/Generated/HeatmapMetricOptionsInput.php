<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HeatmapMetricOptionsInput implements HeatmapMetricOptionsInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $from = null,
        /** @var string|null */
        private readonly string|null $to = null,
        /** @var \Plain\Generated\MetricDimensionType|null */
        private readonly MetricDimensionType|null $dimensionType = null,
        /** @var string|null */
        private readonly string|null $dimensionValue = null,
        /** @var string|null */
        private readonly string|null $subDimension = null,
        /** @var \Plain\Generated\HeatmapMetricFilters|null */
        private readonly HeatmapMetricFilters|null $filters = null,
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

    public function getDimensionType(): MetricDimensionType|null
    {
        return $this->dimensionType;
    }

    public function getDimensionValue(): string|null
    {
        return $this->dimensionValue;
    }

    public function getSubDimension(): string|null
    {
        return $this->subDimension;
    }

    public function getFilters(): HeatmapMetricFilters|null
    {
        return $this->filters;
    }
}
