<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class IssueTrackerFieldInput implements IssueTrackerFieldInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $key,
        /** @var string */
        private readonly string $value,
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
