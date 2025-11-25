<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteThreadLinkInput implements DeleteThreadLinkInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadLinkId,
    ) {
    }

    public function getThreadLinkId(): string
    {
        return $this->threadLinkId;
    }
}
