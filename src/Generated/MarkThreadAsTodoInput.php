<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MarkThreadAsTodoInput implements MarkThreadAsTodoInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var \Plain\Generated\TodoStatusDetail|null */
        private readonly TodoStatusDetail|null $statusDetail = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getStatusDetail(): TodoStatusDetail|null
    {
        return $this->statusDetail;
    }
}
