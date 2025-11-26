<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadFieldSchemaOrderInput implements ThreadFieldSchemaOrderInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadFieldSchemaId,
        /** @var int */
        private readonly int $order,
    ) {
    }

    public function getThreadFieldSchemaId(): string
    {
        return $this->threadFieldSchemaId;
    }

    public function getOrder(): int
    {
        return $this->order;
    }
}
