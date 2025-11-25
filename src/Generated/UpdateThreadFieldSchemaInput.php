<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateThreadFieldSchemaInput implements UpdateThreadFieldSchemaInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadFieldSchemaId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $label = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $description = null,
        /** @var int|null */
        private readonly int|null $order = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $enumValues = null,
        /** @var bool|null */
        private readonly bool|null $isRequired = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $defaultStringValue = null,
        /** @var \Plain\Generated\OptionalBooleanInput|null */
        private readonly OptionalBooleanInput|null $defaultBooleanValue = null,
        /** @var bool|null */
        private readonly bool|null $isAiAutoFillEnabled = null,
        /** @var \Plain\Generated\OptionalDependsOnThreadFieldInput|null */
        private readonly OptionalDependsOnThreadFieldInput|null $dependsOnThreadField = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $dependsOnLabelTypeIds = null,
    ) {
    }

    public function getThreadFieldSchemaId(): string
    {
        return $this->threadFieldSchemaId;
    }

    public function getLabel(): StringInput|null
    {
        return $this->label;
    }

    public function getDescription(): StringInput|null
    {
        return $this->description;
    }

    public function getOrder(): int|null
    {
        return $this->order;
    }

    public function getEnumValues(): iterable|null
    {
        return $this->enumValues;
    }

    public function getIsRequired(): bool|null
    {
        return $this->isRequired;
    }

    public function getDefaultStringValue(): OptionalStringInput|null
    {
        return $this->defaultStringValue;
    }

    public function getDefaultBooleanValue(): OptionalBooleanInput|null
    {
        return $this->defaultBooleanValue;
    }

    public function getIsAiAutoFillEnabled(): bool|null
    {
        return $this->isAiAutoFillEnabled;
    }

    public function getDependsOnThreadField(): OptionalDependsOnThreadFieldInput|null
    {
        return $this->dependsOnThreadField;
    }

    public function getDependsOnLabelTypeIds(): iterable|null
    {
        return $this->dependsOnLabelTypeIds;
    }
}
