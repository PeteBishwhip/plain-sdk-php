<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateSettingInput implements UpdateSettingInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $code,
        /** @var \Plain\Generated\SettingScopeInput */
        private readonly SettingScopeInput $scope,
        /** @var \Plain\Generated\SettingValueInput */
        private readonly SettingValueInput $value,
    ) {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getScope(): SettingScopeInput
    {
        return $this->scope;
    }

    public function getValue(): SettingValueInput
    {
        return $this->value;
    }
}
