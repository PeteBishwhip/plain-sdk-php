<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateGeneratedReplyInput implements UpdateGeneratedReplyInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $generatedReplyId,
        /** @var \Plain\Generated\GeneratedReplyFeedbackInput|null */
        private readonly GeneratedReplyFeedbackInput|null $feedback = null,
    ) {
    }

    public function getGeneratedReplyId(): string
    {
        return $this->generatedReplyId;
    }

    public function getFeedback(): GeneratedReplyFeedbackInput|null
    {
        return $this->feedback;
    }
}
