<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ShareThreadToUserInSlackInput implements ShareThreadToUserInSlackInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $userId,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }
}
