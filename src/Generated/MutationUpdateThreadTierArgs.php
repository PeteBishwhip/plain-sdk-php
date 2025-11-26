<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateThreadTierArgs implements MutationUpdateThreadTierArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateThreadTierInput */
        private readonly UpdateThreadTierInput $input,
    ) {
    }

    public function getInput(): UpdateThreadTierInput
    {
        return $this->input;
    }
}
