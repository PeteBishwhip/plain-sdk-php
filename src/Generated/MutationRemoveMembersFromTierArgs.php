<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveMembersFromTierArgs implements MutationRemoveMembersFromTierArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveMembersFromTierInput */
        private readonly RemoveMembersFromTierInput $input,
    ) {
    }

    public function getInput(): RemoveMembersFromTierInput
    {
        return $this->input;
    }
}
