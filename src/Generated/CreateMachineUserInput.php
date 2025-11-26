<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateMachineUserInput implements CreateMachineUserInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $publicName,
        /** @var string */
        private readonly string $fullName,
        /** @var string|null */
        private readonly string|null $description = null,
        /** @var \Plain\Generated\MachineUserType|null */
        private readonly MachineUserType|null $type = null,
        /** @var \Plain\Generated\WorkspaceFileInput|null */
        private readonly WorkspaceFileInput|null $avatar = null,
    ) {
    }

    public function getPublicName(): string
    {
        return $this->publicName;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getDescription(): string|null
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
