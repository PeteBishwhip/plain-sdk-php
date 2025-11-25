<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ScopeConditionInput implements ScopeConditionInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\ThreadScopePrimitiveType */
        private readonly ThreadScopePrimitiveType $primitiveType,
        /** @var \Plain\Generated\RoleScopeAccessMode */
        private readonly RoleScopeAccessMode $accessMode,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $values = null,
    ) {
    }

    public function getPrimitiveType(): ThreadScopePrimitiveType
    {
        return $this->primitiveType;
    }

    public function getAccessMode(): RoleScopeAccessMode
    {
        return $this->accessMode;
    }

    public function getValues(): iterable|null
    {
        return $this->values;
    }
}
