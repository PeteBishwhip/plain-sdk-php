<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AutoresponderConditionInput implements AutoresponderConditionInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $tierId = null,
        /** @var bool|null */
        private readonly bool|null $isOutsideBusinessHours = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $supportEmailAddresses = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $labelTypeIds = null,
        /** @var iterable<int, int>|null */
        private readonly iterable|null $priorities = null,
    ) {
    }

    public function getTierId(): string|null
    {
        return $this->tierId;
    }

    public function getIsOutsideBusinessHours(): bool|null
    {
        return $this->isOutsideBusinessHours;
    }

    public function getSupportEmailAddresses(): iterable|null
    {
        return $this->supportEmailAddresses;
    }

    public function getLabelTypeIds(): iterable|null
    {
        return $this->labelTypeIds;
    }

    public function getPriorities(): iterable|null
    {
        return $this->priorities;
    }
}
