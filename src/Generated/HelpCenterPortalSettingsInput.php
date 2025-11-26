<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterPortalSettingsInput implements HelpCenterPortalSettingsInputInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $isEnabled = null,
        /** @var \Plain\Generated\HelpCenterPortalSettingsThreadVisibilityInput|null */
        private readonly HelpCenterPortalSettingsThreadVisibilityInput|null $threadVisibility = null,
        /** @var iterable<int, \Plain\Generated\HelpCenterPortalSettingsFormFieldInput>|null */
        private readonly iterable|null $formFields = null,
        /** @var bool|null */
        private readonly bool|null $isAdditionalRecipientsEnabled = null,
    ) {
    }

    public function getIsEnabled(): bool|null
    {
        return $this->isEnabled;
    }

    public function getThreadVisibility(): HelpCenterPortalSettingsThreadVisibilityInput|null
    {
        return $this->threadVisibility;
    }

    public function getFormFields(): iterable|null
    {
        return $this->formFields;
    }

    public function getIsAdditionalRecipientsEnabled(): bool|null
    {
        return $this->isAdditionalRecipientsEnabled;
    }
}
