<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadDiscussionSlackDetailsInput implements ThreadDiscussionSlackDetailsInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $connectedSlackChannelId,
    ) {
    }

    public function getConnectedSlackChannelId(): string
    {
        return $this->connectedSlackChannelId;
    }
}
