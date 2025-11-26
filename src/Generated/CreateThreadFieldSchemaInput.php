<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateThreadFieldSchemaInput implements CreateThreadFieldSchemaInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $label,
        /** @var string */
        private readonly string $key,
        /** @var string */
        private readonly string $description,
        /** @var int */
        private readonly int $order,
        /** @var \Plain\Generated\ThreadFieldSchemaType */
        private readonly ThreadFieldSchemaType $type,
        /** @var iterable<int, string> */
        private readonly iterable $enumValues,
        /** @var bool */
        private readonly bool $isRequired,
        /** @var bool */
        private readonly bool $isAiAutoFillEnabled,
        /** @var string|null */
        private readonly string|null $defaultStringValue = null,
        /** @var bool|null */
        private readonly bool|null $defaultBooleanValue = null,
        /** @var \Plain\Generated\DependsOnThreadFieldInput|null */
        private readonly DependsOnThreadFieldInput|null $dependsOnThreadField = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $dependsOnLabelTypeIds = null,
    ) {
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getType(): ThreadFieldSchemaType
    {
        return $this->type;
    }

    public function getEnumValues(): iterable
    {
        return $this->enumValues;
    }

    public function getIsRequired(): bool
    {
        return $this->isRequired;
    }

    public function getDefaultStringValue(): string|null
    {
        return $this->defaultStringValue;
    }

    public function getDefaultBooleanValue(): bool|null
    {
        return $this->defaultBooleanValue;
    }

    public function getIsAiAutoFillEnabled(): bool
    {
        return $this->isAiAutoFillEnabled;
    }

    public function getDependsOnThreadField(): DependsOnThreadFieldInput|null
    {
        return $this->dependsOnThreadField;
    }

    public function getDependsOnLabelTypeIds(): iterable|null
    {
        return $this->dependsOnLabelTypeIds;
    }
}
