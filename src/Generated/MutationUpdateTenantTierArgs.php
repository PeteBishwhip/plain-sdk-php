<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateTenantTierArgs implements MutationUpdateTenantTierArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateTenantTierInput */
        private readonly UpdateTenantTierInput $input,
    ) {
    }

    public function getInput(): UpdateTenantTierInput
    {
        return $this->input;
    }
}
