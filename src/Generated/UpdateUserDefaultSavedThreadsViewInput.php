<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateUserDefaultSavedThreadsViewInput implements UpdateUserDefaultSavedThreadsViewInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $userId,
        /** @var string|null */
        private readonly string|null $savedViewId = null,
    ) {
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getSavedViewId(): string|null
    {
        return $this->savedViewId;
    }
}
