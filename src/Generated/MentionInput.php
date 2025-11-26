<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MentionInput implements MentionInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $userId,
        /** @var string */
        private readonly string $displayName,
    ) {
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }
}
