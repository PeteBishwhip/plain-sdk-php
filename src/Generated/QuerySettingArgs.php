<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySettingArgs implements QuerySettingArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $code,
        /** @var \Plain\Generated\SettingScopeInput */
        private readonly SettingScopeInput $scope,
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
}
