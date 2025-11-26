<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class RemoveMembersFromTierInput implements RemoveMembersFromTierInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\TierMemberIdentifierInput> */
        private readonly iterable $memberIdentifiers,
    ) {
    }

    public function getMemberIdentifiers(): iterable
    {
        return $this->memberIdentifiers;
    }
}
