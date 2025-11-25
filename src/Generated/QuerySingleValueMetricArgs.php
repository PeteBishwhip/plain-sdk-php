<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySingleValueMetricArgs implements QuerySingleValueMetricArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var \Plain\Generated\SingleValueMetricOptions|null */
        private readonly SingleValueMetricOptions|null $options = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOptions(): SingleValueMetricOptions|null
    {
        return $this->options;
    }
}
