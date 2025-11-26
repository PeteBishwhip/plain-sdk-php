<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkspaceSlackChannelIntegrationArgs implements MutationCreateWorkspaceSlackChannelIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkspaceSlackChannelIntegrationInput */
        private readonly CreateWorkspaceSlackChannelIntegrationInput $input,
    ) {
    }

    public function getInput(): CreateWorkspaceSlackChannelIntegrationInput
    {
        return $this->input;
    }
}
