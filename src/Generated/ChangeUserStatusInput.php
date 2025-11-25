<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ChangeUserStatusInput implements ChangeUserStatusInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $userId,
        /** @var \Plain\Generated\UserStatus */
        private readonly UserStatus $status,
    ) {
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getStatus(): UserStatus
    {
        return $this->status;
    }
}
