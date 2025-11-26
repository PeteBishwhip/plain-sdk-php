<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ThreadFieldFilter implements ThreadFieldFilterInterface
{
    public function __construct(
        /** @var string */
        private readonly string $key,
        /** @var string|null */
        private readonly string|null $stringValue = null,
        /** @var bool|null */
        private readonly bool|null $booleanValue = null,
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getStringValue(): string|null
    {
        return $this->stringValue;
    }

    public function getBooleanValue(): bool|null
    {
        return $this->booleanValue;
    }
}
