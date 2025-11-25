<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateTierArgs implements MutationUpdateTierArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateTierInput */
        private readonly UpdateTierInput $input,
    ) {
    }

    public function getInput(): UpdateTierInput
    {
        return $this->input;
    }
}
