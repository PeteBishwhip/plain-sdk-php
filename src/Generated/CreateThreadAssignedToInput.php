<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateThreadAssignedToInput implements CreateThreadAssignedToInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $userId = null,
        /** @var string|null */
        private readonly string|null $machineUserId = null,
    ) {
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
