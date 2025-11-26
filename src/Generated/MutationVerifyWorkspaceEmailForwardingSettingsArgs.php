<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationVerifyWorkspaceEmailForwardingSettingsArgs implements MutationVerifyWorkspaceEmailForwardingSettingsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\VerifyWorkspaceEmailForwardingSettingsInput */
        private readonly VerifyWorkspaceEmailForwardingSettingsInput $input,
    ) {
    }

    public function getInput(): VerifyWorkspaceEmailForwardingSettingsInput
    {
        return $this->input;
    }
}
