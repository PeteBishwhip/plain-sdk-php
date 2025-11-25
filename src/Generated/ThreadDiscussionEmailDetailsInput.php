<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadDiscussionEmailDetailsInput implements ThreadDiscussionEmailDetailsInputInterface
{
    public function __construct(
        /** @var iterable<int, string> */
        private readonly iterable $toAddresses,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $ccAddresses = null,
    ) {
    }

    public function getToAddresses(): iterable
    {
        return $this->toAddresses;
    }

    public function getCcAddresses(): iterable|null
    {
        return $this->ccAddresses;
    }
}
