<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HeatmapMetricFilters implements HeatmapMetricFiltersInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $userId = null,
    ) {
    }

    public function getUserId(): string|null
    {
        return $this->userId;
    }
}
