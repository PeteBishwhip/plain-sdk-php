<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertThreadFieldInput implements UpsertThreadFieldInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertThreadFieldIdentifier */
        private readonly UpsertThreadFieldIdentifier $identifier,
        /** @var \Plain\Generated\ThreadFieldSchemaType */
        private readonly ThreadFieldSchemaType $type,
        /** @var string|null */
        private readonly string|null $stringValue = null,
        /** @var bool|null */
        private readonly bool|null $booleanValue = null,
    ) {
    }

    public function getIdentifier(): UpsertThreadFieldIdentifier
    {
        return $this->identifier;
    }

    public function getType(): ThreadFieldSchemaType
    {
        return $this->type;
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
