<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteSavedThreadsViewInput implements DeleteSavedThreadsViewInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $savedThreadsViewId,
    ) {
    }

    public function getSavedThreadsViewId(): string
    {
        return $this->savedThreadsViewId;
    }
}
