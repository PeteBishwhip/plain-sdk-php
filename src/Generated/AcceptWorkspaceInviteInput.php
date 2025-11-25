<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AcceptWorkspaceInviteInput implements AcceptWorkspaceInviteInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $inviteId,
    ) {
    }

    public function getInviteId(): string
    {
        return $this->inviteId;
    }
}
