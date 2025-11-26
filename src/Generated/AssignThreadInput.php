<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AssignThreadInput implements AssignThreadInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string|null */
        private readonly string|null $userId = null,
        /** @var string|null */
        private readonly string|null $machineUserId = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getUserId(): string|null
    {
        return $this->userId;
    }

    public function getMachineUserId(): string|null
    {
        return $this->machineUserId;
    }
}
