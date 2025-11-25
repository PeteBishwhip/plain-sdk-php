<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class RemoveAdditionalAssigneesInput implements RemoveAdditionalAssigneesInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $userIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $machineUserIds = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getUserIds(): iterable|null
    {
        return $this->userIds;
    }

    public function getMachineUserIds(): iterable|null
    {
        return $this->machineUserIds;
    }
}
