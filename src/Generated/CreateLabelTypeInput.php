<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateLabelTypeInput implements CreateLabelTypeInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var string|null */
        private readonly string|null $icon = null,
        /** @var string|null */
        private readonly string|null $color = null,
        /** @var \Plain\Generated\LabelTypeType|null */
        private readonly LabelTypeType|null $type = null,
        /** @var string|null */
        private readonly string|null $description = null,
        /** @var string|null */
        private readonly string|null $parentLabelTypeId = null,
        /** @var string|null */
        private readonly string|null $externalId = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIcon(): string|null
    {
        return $this->icon;
    }

    public function getColor(): string|null
    {
        return $this->color;
    }

    public function getType(): LabelTypeType|null
    {
        return $this->type;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getParentLabelTypeId(): string|null
    {
        return $this->parentLabelTypeId;
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }
}
