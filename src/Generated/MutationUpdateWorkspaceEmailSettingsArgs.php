<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateWorkspaceEmailSettingsArgs implements MutationUpdateWorkspaceEmailSettingsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateWorkspaceEmailSettingsInput */
        private readonly UpdateWorkspaceEmailSettingsInput $input,
    ) {
    }

    public function getInput(): UpdateWorkspaceEmailSettingsInput
    {
        return $this->input;
    }
}
