<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateThreadEscalationPathInput implements UpdateThreadEscalationPathInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string|null */
        private readonly string|null $escalationPathId = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getEscalationPathId(): string|null
    {
        return $this->escalationPathId;
    }
}
