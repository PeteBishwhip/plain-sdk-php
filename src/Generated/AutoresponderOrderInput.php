<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AutoresponderOrderInput implements AutoresponderOrderInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $autoresponderId,
        /** @var int */
        private readonly int $order,
    ) {
    }

    public function getAutoresponderId(): string
    {
        return $this->autoresponderId;
    }

    public function getOrder(): int
    {
        return $this->order;
    }
}
