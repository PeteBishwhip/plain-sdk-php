<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateAiFeatureFeedbackArgs implements MutationCreateAiFeatureFeedbackArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateAiFeatureFeedbackInput */
        private readonly CreateAiFeatureFeedbackInput $input,
    ) {
    }

    public function getInput(): CreateAiFeatureFeedbackInput
    {
        return $this->input;
    }
}
