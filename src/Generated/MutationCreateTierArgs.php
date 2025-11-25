<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateTierArgs implements MutationCreateTierArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateTierInput */
        private readonly CreateTierInput $input,
    ) {
    }

    public function getInput(): CreateTierInput
    {
        return $this->input;
    }
}
