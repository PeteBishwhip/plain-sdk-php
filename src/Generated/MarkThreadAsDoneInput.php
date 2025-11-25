<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MarkThreadAsDoneInput implements MarkThreadAsDoneInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var \Plain\Generated\DoneStatusDetail|null */
        private readonly DoneStatusDetail|null $statusDetail = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getStatusDetail(): DoneStatusDetail|null
    {
        return $this->statusDetail;
    }
}
