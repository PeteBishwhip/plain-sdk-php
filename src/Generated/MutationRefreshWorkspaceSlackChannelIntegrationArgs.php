<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRefreshWorkspaceSlackChannelIntegrationArgs implements MutationRefreshWorkspaceSlackChannelIntegrationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RefreshWorkspaceSlackChannelIntegrationInput */
        private readonly RefreshWorkspaceSlackChannelIntegrationInput $input,
    ) {
    }

    public function getInput(): RefreshWorkspaceSlackChannelIntegrationInput
    {
        return $this->input;
    }
}
