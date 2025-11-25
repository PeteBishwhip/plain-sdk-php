<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateMachineUserInput implements UpdateMachineUserInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $machineUserId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $fullName = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $publicName = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $description = null,
        /** @var \Plain\Generated\MachineUserType|null */
        private readonly MachineUserType|null $type = null,
        /** @var \Plain\Generated\WorkspaceFileInput|null */
        private readonly WorkspaceFileInput|null $avatar = null,
    ) {
    }

    public function getMachineUserId(): string
    {
        return $this->machineUserId;
    }

    public function getFullName(): StringInput|null
    {
        return $this->fullName;
    }

    public function getPublicName(): StringInput|null
    {
        return $this->publicName;
    }

    public function getDescription(): StringInput|null
    {
        return $this->description;
    }

    public function getType(): MachineUserType|null
    {
        return $this->type;
    }

    public function getAvatar(): WorkspaceFileInput|null
    {
        return $this->avatar;
    }
}
