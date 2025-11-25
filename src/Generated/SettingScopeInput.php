<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SettingScopeInput implements SettingScopeInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\SettingScopeType */
        private readonly SettingScopeType $scopeType,
        /** @var string|null */
        private readonly string|null $id = null,
    ) {
    }

    public function getId(): string|null
    {
        return $this->id;
    }

    public function getScopeType(): SettingScopeType
    {
        return $this->scopeType;
    }
}
