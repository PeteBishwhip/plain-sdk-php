<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AssignRolesToUserInput implements AssignRolesToUserInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $userId,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $roleIds = null,
        /** @var \Plain\Generated\RoleKey|null */
        private readonly RoleKey|null $roleKey = null,
        /** @var string|null */
        private readonly string|null $customRoleId = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $usingBillingRotaSeat = null,
    ) {
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getRoleIds(): iterable|null
    {
        return $this->roleIds;
    }

    public function getRoleKey(): RoleKey|null
    {
        return $this->roleKey;
    }

    public function getCustomRoleId(): string|null
    {
        return $this->customRoleId;
    }

    public function getUsingBillingRotaSeat(): BooleanInput|null
    {
        return $this->usingBillingRotaSeat;
    }
}
