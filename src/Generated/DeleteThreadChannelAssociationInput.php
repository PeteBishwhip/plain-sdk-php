<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteThreadChannelAssociationInput implements DeleteThreadChannelAssociationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadChannelAssociationId,
    ) {
    }

    public function getThreadChannelAssociationId(): string
    {
        return $this->threadChannelAssociationId;
    }
}
