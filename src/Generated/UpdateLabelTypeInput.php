<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateLabelTypeInput implements UpdateLabelTypeInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $labelTypeId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $icon = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $color = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $description = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $externalId = null,
    ) {
    }

    public function getLabelTypeId(): string
    {
        return $this->labelTypeId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getIcon(): OptionalStringInput|null
    {
        return $this->icon;
    }

    public function getColor(): OptionalStringInput|null
    {
        return $this->color;
    }

    public function getDescription(): OptionalStringInput|null
    {
        return $this->description;
    }

    public function getExternalId(): OptionalStringInput|null
    {
        return $this->externalId;
    }
}
