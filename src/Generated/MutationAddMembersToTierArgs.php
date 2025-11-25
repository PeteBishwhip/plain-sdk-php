<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddMembersToTierArgs implements MutationAddMembersToTierArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddMembersToTierInput */
        private readonly AddMembersToTierInput $input,
    ) {
    }

    public function getInput(): AddMembersToTierInput
    {
        return $this->input;
    }
}
