<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DependsOnThreadFieldInput implements DependsOnThreadFieldInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadFieldSchemaId,
        /** @var string */
        private readonly string $threadFieldSchemaValue,
    ) {
    }

    public function getThreadFieldSchemaId(): string
    {
        return $this->threadFieldSchemaId;
    }

    public function getThreadFieldSchemaValue(): string
    {
        return $this->threadFieldSchemaValue;
    }
}
