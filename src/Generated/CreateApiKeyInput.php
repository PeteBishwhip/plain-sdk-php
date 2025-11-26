<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateApiKeyInput implements CreateApiKeyInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $machineUserId,
        /** @var iterable<int, string> */
        private readonly iterable $permissions,
        /** @var string|null */
        private readonly string|null $description = null,
    ) {
    }

    public function getMachineUserId(): string
    {
        return $this->machineUserId;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getPermissions(): iterable
    {
        return $this->permissions;
    }
}
