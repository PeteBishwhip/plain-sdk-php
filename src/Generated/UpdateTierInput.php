<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateTierInput implements UpdateTierInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $tierId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $externalId = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $color = null,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $defaultThreadPriority = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isDefault = null,
    ) {
    }

    public function getTierId(): string
    {
        return $this->tierId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getExternalId(): OptionalStringInput|null
    {
        return $this->externalId;
    }

    public function getColor(): StringInput|null
    {
        return $this->color;
    }

    public function getDefaultThreadPriority(): IntInput|null
    {
        return $this->defaultThreadPriority;
    }

    public function getIsDefault(): BooleanInput|null
    {
        return $this->isDefault;
    }
}
