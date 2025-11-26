<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateHelpCenterIndexInput implements UpdateHelpCenterIndexInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterId,
        /** @var string */
        private readonly string $hash,
        /** @var iterable<int, \Plain\Generated\HelpCenterIndexItemInput> */
        private readonly iterable $helpCenterIndex,
    ) {
    }

    public function getHelpCenterId(): string
    {
        return $this->helpCenterId;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getHelpCenterIndex(): iterable
    {
        return $this->helpCenterIndex;
    }
}
