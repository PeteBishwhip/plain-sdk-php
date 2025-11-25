<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateAiFeatureFeedbackInput implements CreateAiFeatureFeedbackInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $feature,
        /** @var \Plain\Generated\AiAgentFeedbackDetailsInput|null */
        private readonly AiAgentFeedbackDetailsInput|null $aiAgentFeedback = null,
    ) {
    }

    public function getFeature(): string
    {
        return $this->feature;
    }

    public function getAiAgentFeedback(): AiAgentFeedbackDetailsInput|null
    {
        return $this->aiAgentFeedback;
    }
}
