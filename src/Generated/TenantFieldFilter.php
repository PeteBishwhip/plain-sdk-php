<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TenantFieldFilter implements TenantFieldFilterInterface
{
    public function __construct(
        /** @var string */
        private readonly string $externalFieldId,
        /** @var string|null */
        private readonly string|null $stringValue = null,
        /** @var bool|null */
        private readonly bool|null $booleanValue = null,
        /** @var string|null */
        private readonly string|null $dateValue = null,
        /** @var float|null */
        private readonly float|null $numberValue = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $stringArrayValue = null,
    ) {
    }

    public function getExternalFieldId(): string
    {
        return $this->externalFieldId;
    }

    public function getStringValue(): string|null
    {
        return $this->stringValue;
    }

    public function getBooleanValue(): bool|null
    {
        return $this->booleanValue;
    }

    public function getDateValue(): string|null
    {
        return $this->dateValue;
    }

    public function getNumberValue(): float|null
    {
        return $this->numberValue;
    }

    public function getStringArrayValue(): iterable|null
    {
        return $this->stringArrayValue;
    }
}
