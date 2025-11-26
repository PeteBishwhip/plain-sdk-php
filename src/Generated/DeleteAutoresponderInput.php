<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteAutoresponderInput implements DeleteAutoresponderInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $autoresponderId,
    ) {
    }

    public function getAutoresponderId(): string
    {
        return $this->autoresponderId;
    }
}
