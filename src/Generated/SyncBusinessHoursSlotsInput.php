<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SyncBusinessHoursSlotsInput implements SyncBusinessHoursSlotsInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\BusinessHoursSlotInput> */
        private readonly iterable $slots,
    ) {
    }

    public function getSlots(): iterable
    {
        return $this->slots;
    }
}
