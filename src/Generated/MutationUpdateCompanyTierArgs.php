<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateCompanyTierArgs implements MutationUpdateCompanyTierArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateCompanyTierInput */
        private readonly UpdateCompanyTierInput $input,
    ) {
    }

    public function getInput(): UpdateCompanyTierInput
    {
        return $this->input;
    }
}
