<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteEscalationPathInput implements DeleteEscalationPathInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $escalationPathId,
    ) {
    }

    public function getEscalationPathId(): string
    {
        return $this->escalationPathId;
    }
}
