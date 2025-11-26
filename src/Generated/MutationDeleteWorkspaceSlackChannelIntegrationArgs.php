<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWorkspaceSlackChannelIntegrationArgs implements MutationDeleteWorkspaceSlackChannelIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWorkspaceSlackChannelIntegrationInput */
        private readonly DeleteWorkspaceSlackChannelIntegrationInput $input,
    ) {
    }

    public function getInput(): DeleteWorkspaceSlackChannelIntegrationInput
    {
        return $this->input;
    }
}
