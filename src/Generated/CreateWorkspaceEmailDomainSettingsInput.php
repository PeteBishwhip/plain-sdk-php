<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateWorkspaceEmailDomainSettingsInput implements CreateWorkspaceEmailDomainSettingsInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $supportEmailAddress,
    ) {
    }

    public function getSupportEmailAddress(): string
    {
        return $this->supportEmailAddress;
    }
}
