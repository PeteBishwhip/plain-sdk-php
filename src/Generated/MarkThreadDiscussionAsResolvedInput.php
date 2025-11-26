<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MarkThreadDiscussionAsResolvedInput implements MarkThreadDiscussionAsResolvedInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadDiscussionId,
    ) {
    }

    public function getThreadDiscussionId(): string
    {
        return $this->threadDiscussionId;
    }
}
