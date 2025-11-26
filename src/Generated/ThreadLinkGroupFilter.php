<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadLinkGroupFilter implements ThreadLinkGroupFilterInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\ThreadLinkStatus>|null */
        private readonly iterable|null $statuses = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $threadLinkGroupIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $companyIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $tierIds = null,
    ) {
    }

    public function getStatuses(): iterable|null
    {
        return $this->statuses;
    }

    public function getThreadLinkGroupIds(): iterable|null
    {
        return $this->threadLinkGroupIds;
    }

    public function getCompanyIds(): iterable|null
    {
        return $this->companyIds;
    }

    public function getTierIds(): iterable|null
    {
        return $this->tierIds;
    }
}
