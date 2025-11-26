<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SingleValueMetricOptions implements SingleValueMetricOptionsInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $from = null,
        /** @var string|null */
        private readonly string|null $to = null,
        /** @var \Plain\Generated\MetricDimensionType|null */
        private readonly MetricDimensionType|null $dimension = null,
        /** @var string|null */
        private readonly string|null $subDimension = null,
        /** @var \Plain\Generated\SingleValueMetricFilters|null */
        private readonly SingleValueMetricFilters|null $filters = null,
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

    public function getDimension(): MetricDimensionType|null
    {
        return $this->dimension;
    }

    public function getSubDimension(): string|null
    {
        return $this->subDimension;
    }

    public function getFilters(): SingleValueMetricFilters|null
    {
        return $this->filters;
    }
}
