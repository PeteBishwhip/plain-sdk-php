<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class GenerateReplyOption implements GenerateReplyOptionInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $key = null,
        /** @var string|null */
        private readonly string|null $value = null,
    ) {
    }

    public function getKey(): string|null
    {
        return $this->key;
    }

    public function getValue(): string|null
    {
        return $this->value;
    }
}
