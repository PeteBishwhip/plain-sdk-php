<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateThreadTitleInput implements UpdateThreadTitleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $title,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
