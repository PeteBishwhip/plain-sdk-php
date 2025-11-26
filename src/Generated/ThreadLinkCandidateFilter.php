<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadLinkCandidateFilter implements ThreadLinkCandidateFilterInterface
{
    public function __construct(
        /** @var string */
        private readonly string $sourceType,
    ) {
    }

    public function getSourceType(): string
    {
        return $this->sourceType;
    }
}
