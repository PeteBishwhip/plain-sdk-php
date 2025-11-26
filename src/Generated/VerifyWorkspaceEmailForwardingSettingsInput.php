<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class VerifyWorkspaceEmailForwardingSettingsInput implements VerifyWorkspaceEmailForwardingSettingsInputInterface
{
    public function __construct(
        /** @var bool */
        private readonly bool $isForwardingConfigured,
    ) {
    }

    public function getIsForwardingConfigured(): bool
    {
        return $this->isForwardingConfigured;
    }
}
