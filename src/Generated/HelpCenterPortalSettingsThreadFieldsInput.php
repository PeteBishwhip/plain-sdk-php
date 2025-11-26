<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterPortalSettingsThreadFieldsInput implements HelpCenterPortalSettingsThreadFieldsInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadFieldSchemaId,
        /** @var string|null */
        private readonly string|null $selectedStringValue = null,
        /** @var bool|null */
        private readonly bool|null $selectedBooleanValue = null,
    ) {
    }

    public function getThreadFieldSchemaId(): string
    {
        return $this->threadFieldSchemaId;
    }

    public function getSelectedStringValue(): string|null
    {
        return $this->selectedStringValue;
    }

    public function getSelectedBooleanValue(): bool|null
    {
        return $this->selectedBooleanValue;
    }
}
