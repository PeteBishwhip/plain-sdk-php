<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryTimeSeriesMetricArgs implements QueryTimeSeriesMetricArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var \Plain\Generated\TimeSeriesMetricOptions|null */
        private readonly TimeSeriesMetricOptions|null $options = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOptions(): TimeSeriesMetricOptions|null
    {
        return $this->options;
    }
}
