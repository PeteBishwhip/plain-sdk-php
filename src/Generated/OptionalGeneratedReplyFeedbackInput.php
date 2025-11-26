<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class OptionalGeneratedReplyFeedbackInput implements OptionalGeneratedReplyFeedbackInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\GeneratedReplyFeedbackType|null */
        private readonly GeneratedReplyFeedbackType|null $value = null,
    ) {
    }

    public function getValue(): GeneratedReplyFeedbackType|null
    {
        return $this->value;
    }
}
