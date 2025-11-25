<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateThreadTierInput implements UpdateThreadTierInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var \Plain\Generated\TierIdentifierInput|null */
        private readonly TierIdentifierInput|null $tierIdentifier = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getTierIdentifier(): TierIdentifierInput|null
    {
        return $this->tierIdentifier;
    }
}
