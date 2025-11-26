<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateWorkspaceEmailSettingsInput implements UpdateWorkspaceEmailSettingsInputInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $isEnabled = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $bccEmailAddresses = null,
    ) {
    }

    public function getIsEnabled(): bool|null
    {
        return $this->isEnabled;
    }

    public function getBccEmailAddresses(): iterable|null
    {
        return $this->bccEmailAddresses;
    }
}
