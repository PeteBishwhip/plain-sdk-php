<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SettingValueInput implements SettingValueInputInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $boolean = null,
        /** @var string|null */
        private readonly string|null $string = null,
        /** @var int|null */
        private readonly int|null $number = null,
        /** @var iterable<int, string|null>|null */
        private readonly iterable|null $stringArray = null,
    ) {
    }

    public function getBoolean(): bool|null
    {
        return $this->boolean;
    }

    public function getString(): string|null
    {
        return $this->string;
    }

    public function getNumber(): int|null
    {
        return $this->number;
    }

    public function getStringArray(): iterable|null
    {
        return $this->stringArray;
    }
}
