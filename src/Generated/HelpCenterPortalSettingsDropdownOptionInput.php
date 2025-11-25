<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterPortalSettingsDropdownOptionInput implements HelpCenterPortalSettingsDropdownOptionInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $label,
        /** @var string|null */
        private readonly string|null $dropdownOptionId = null,
        /** @var \Plain\Generated\HelpCenterPortalSettingsThreadDetailsInput|null */
        private readonly HelpCenterPortalSettingsThreadDetailsInput|null $threadDetails = null,
    ) {
    }

    public function getDropdownOptionId(): string|null
    {
        return $this->dropdownOptionId;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getThreadDetails(): HelpCenterPortalSettingsThreadDetailsInput|null
    {
        return $this->threadDetails;
    }
}
