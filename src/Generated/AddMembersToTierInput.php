<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AddMembersToTierInput implements AddMembersToTierInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\TierIdentifierInput */
        private readonly TierIdentifierInput $tierIdentifier,
        /** @var iterable<int, \Plain\Generated\TierMemberIdentifierInput> */
        private readonly iterable $memberIdentifiers,
    ) {
    }

    public function getTierIdentifier(): TierIdentifierInput
    {
        return $this->tierIdentifier;
    }

    public function getMemberIdentifiers(): iterable
    {
        return $this->memberIdentifiers;
    }
}
