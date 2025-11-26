<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MachineUsersFilter implements MachineUsersFilterInterface
{
    public function __construct(
        /** @var \Plain\Generated\MachineUserType|null */
        private readonly MachineUserType|null $type = null,
    ) {
    }

    public function getType(): MachineUserType|null
    {
        return $this->type;
    }
}
