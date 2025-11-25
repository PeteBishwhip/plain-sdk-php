<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteMachineUserInput implements DeleteMachineUserInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $machineUserId,
    ) {
    }

    public function getMachineUserId(): string
    {
        return $this->machineUserId;
    }
}
