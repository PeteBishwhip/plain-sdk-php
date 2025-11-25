<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AddWorkspaceAlternateSupportEmailAddressInput implements AddWorkspaceAlternateSupportEmailAddressInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $alternateSupportEmailAddress,
    ) {
    }

    public function getAlternateSupportEmailAddress(): string
    {
        return $this->alternateSupportEmailAddress;
    }
}
