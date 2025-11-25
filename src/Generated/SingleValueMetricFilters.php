<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SingleValueMetricFilters implements SingleValueMetricFiltersInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $userId = null,
        /** @var int|null */
        private readonly int|null $csatRating = null,
        /** @var string|null */
        private readonly string|null $csatSurveyId = null,
    ) {
    }

    public function getUserId(): string|null
    {
        return $this->userId;
    }

    public function getCsatRating(): int|null
    {
        return $this->csatRating;
    }

    public function getCsatSurveyId(): string|null
    {
        return $this->csatSurveyId;
    }
}
