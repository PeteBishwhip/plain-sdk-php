<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertTenantFieldInput implements UpsertTenantFieldInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\TenantFieldIdentifier */
        private readonly TenantFieldIdentifier $tenantFieldIdentifier,
        /** @var \Plain\Generated\TenantFieldType */
        private readonly TenantFieldType $type,
        /** @var string|null */
        private readonly string|null $stringValue = null,
        /** @var float|null */
        private readonly float|null $numberValue = null,
        /** @var bool|null */
        private readonly bool|null $booleanValue = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $arrayValue = null,
        /** @var string|null */
        private readonly string|null $dateValue = null,
    ) {
    }

    public function getTenantFieldIdentifier(): TenantFieldIdentifier
    {
        return $this->tenantFieldIdentifier;
    }

    public function getType(): TenantFieldType
    {
        return $this->type;
    }

    public function getStringValue(): string|null
    {
        return $this->stringValue;
    }

    public function getNumberValue(): float|null
    {
        return $this->numberValue;
    }

    public function getBooleanValue(): bool|null
    {
        return $this->booleanValue;
    }

    public function getArrayValue(): iterable|null
    {
        return $this->arrayValue;
    }

    public function getDateValue(): string|null
    {
        return $this->dateValue;
    }
}
