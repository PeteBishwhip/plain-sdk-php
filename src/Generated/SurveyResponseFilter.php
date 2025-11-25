<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SurveyResponseFilter implements SurveyResponseFilterInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $hasResponse = null,
        /** @var \Plain\Generated\SentimentType|null */
        private readonly SentimentType|null $sentiment = null,
        /** @var int|null */
        private readonly int|null $rating = null,
        /** @var string|null */
        private readonly string|null $surveyId = null,
        /** @var \Plain\Generated\DatetimeFilter|null */
        private readonly DatetimeFilter|null $responseAt = null,
    ) {
    }

    public function getHasResponse(): bool|null
    {
        return $this->hasResponse;
    }

    public function getSentiment(): SentimentType|null
    {
        return $this->sentiment;
    }

    public function getRating(): int|null
    {
        return $this->rating;
    }

    public function getSurveyId(): string|null
    {
        return $this->surveyId;
    }

    public function getResponseAt(): DatetimeFilter|null
    {
        return $this->responseAt;
    }
}
