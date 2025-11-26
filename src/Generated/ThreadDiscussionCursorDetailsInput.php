<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadDiscussionCursorDetailsInput implements ThreadDiscussionCursorDetailsInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $type,
        /** @var string|null */
        private readonly string|null $repositoryUrl = null,
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getRepositoryUrl(): string|null
    {
        return $this->repositoryUrl;
    }
}
