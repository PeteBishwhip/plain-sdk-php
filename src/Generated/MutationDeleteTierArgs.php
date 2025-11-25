<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteTierArgs implements MutationDeleteTierArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteTierInput */
        private readonly DeleteTierInput $input,
    ) {
    }

    public function getInput(): DeleteTierInput
    {
        return $this->input;
    }
}
