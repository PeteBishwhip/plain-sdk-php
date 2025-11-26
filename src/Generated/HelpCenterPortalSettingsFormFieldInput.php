<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterPortalSettingsFormFieldInput implements HelpCenterPortalSettingsFormFieldInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\HelpCenterPortalSettingsFormFieldType */
        private readonly HelpCenterPortalSettingsFormFieldType $type,
        /** @var string */
        private readonly string $label,
        /** @var bool */
        private readonly bool $isRequired,
        /** @var string|null */
        private readonly string|null $id = null,
        /** @var string|null */
        private readonly string|null $placeholder = null,
        /** @var \Plain\Generated\HelpCenterPortalSettingsThreadDetailsInput|null */
        private readonly HelpCenterPortalSettingsThreadDetailsInput|null $threadDetails = null,
        /** @var iterable<int, \Plain\Generated\HelpCenterPortalSettingsDropdownOptionInput>|null */
        private readonly iterable|null $dropdownOptions = null,
    ) {
    }

    public function getId(): string|null
    {
        return $this->id;
    }

    public function getType(): HelpCenterPortalSettingsFormFieldType
    {
        return $this->type;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getPlaceholder(): string|null
    {
        return $this->placeholder;
    }

    public function getIsRequired(): bool
    {
        return $this->isRequired;
    }

    public function getThreadDetails(): HelpCenterPortalSettingsThreadDetailsInput|null
    {
        return $this->threadDetails;
    }

    public function getDropdownOptions(): iterable|null
    {
        return $this->dropdownOptions;
    }
}
