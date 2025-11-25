<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceEmailDomainSettingsArgs implements MutationCreateWorkspaceEmailDomainSettingsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceEmailDomainSettingsInput */
        private readonly CreateWorkspaceEmailDomainSettingsInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceEmailDomainSettingsInput
    {
        return $this->input;
    }
}
