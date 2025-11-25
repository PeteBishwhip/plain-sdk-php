<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class GeneratedReplyFeedbackInput implements GeneratedReplyFeedbackInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\OptionalGeneratedReplyFeedbackInput|null */
        private readonly OptionalGeneratedReplyFeedbackInput|null $type = null,
    ) {
    }

    public function getType(): OptionalGeneratedReplyFeedbackInput|null
    {
        return $this->type;
    }
}
