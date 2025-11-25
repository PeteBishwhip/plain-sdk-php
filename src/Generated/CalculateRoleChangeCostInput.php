<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CalculateRoleChangeCostInput implements CalculateRoleChangeCostInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\RoleKey */
        private readonly RoleKey $roleKey,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $quantity = null,
        /** @var string|null */
        private readonly string|null $userId = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $usingBillingRotaSeat = null,
    ) {
    }

    public function getRoleKey(): RoleKey
    {
        return $this->roleKey;
    }

    public function getQuantity(): IntInput|null
    {
        return $this->quantity;
    }

    public function getUserId(): string|null
    {
        return $this->userId;
    }

    public function getUsingBillingRotaSeat(): BooleanInput|null
    {
        return $this->usingBillingRotaSeat;
    }
}
