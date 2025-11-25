<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCalculateRoleChangeCostArgs implements MutationCalculateRoleChangeCostArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CalculateRoleChangeCostInput */
        private readonly CalculateRoleChangeCostInput $input,
    ) {
    }

    public function getInput(): CalculateRoleChangeCostInput
    {
        return $this->input;
    }
}
