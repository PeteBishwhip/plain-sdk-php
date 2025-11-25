<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteUserInput implements DeleteUserInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $userId,
    ) {
    }

    public function getUserId(): string
    {
        return $this->userId;
    }
}
