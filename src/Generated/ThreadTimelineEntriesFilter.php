<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadTimelineEntriesFilter implements ThreadTimelineEntriesFilterInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $isMessage = null,
    ) {
    }

    public function getIsMessage(): bool|null
    {
        return $this->isMessage;
    }
}
