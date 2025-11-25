<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSyncBusinessHoursSlotsArgs implements MutationSyncBusinessHoursSlotsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SyncBusinessHoursSlotsInput */
        private readonly SyncBusinessHoursSlotsInput $input,
    ) {
    }

    public function getInput(): SyncBusinessHoursSlotsInput
    {
        return $this->input;
    }
}
