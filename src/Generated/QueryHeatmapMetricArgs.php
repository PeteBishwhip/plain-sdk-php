<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryHeatmapMetricArgs implements QueryHeatmapMetricArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var \Plain\Generated\HeatmapMetricOptionsInput|null */
        private readonly HeatmapMetricOptionsInput|null $options = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOptions(): HeatmapMetricOptionsInput|null
    {
        return $this->options;
    }
}
