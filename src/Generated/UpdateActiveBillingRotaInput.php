<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateActiveBillingRotaInput implements UpdateActiveBillingRotaInputInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $userIdsToAdd = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $userIdsToRemove = null,
    ) {
    }

    public function getUserIdsToAdd(): iterable|null
    {
        return $this->userIdsToAdd;
    }

    public function getUserIdsToRemove(): iterable|null
    {
        return $this->userIdsToRemove;
    }
}
