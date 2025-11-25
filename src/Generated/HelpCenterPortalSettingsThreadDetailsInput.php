<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterPortalSettingsThreadDetailsInput implements HelpCenterPortalSettingsThreadDetailsInputInterface
{
    public function __construct(
        /** @var iterable<int, string>|null */
        private readonly iterable|null $labelTypeIds = null,
        /** @var int|null */
        private readonly int|null $priority = null,
        /** @var iterable<int, \Plain\Generated\ThreadAssigneeInput>|null */
        private readonly iterable|null $assignees = null,
        /** @var iterable<int, \Plain\Generated\HelpCenterPortalSettingsThreadFieldsInput>|null */
        private readonly iterable|null $threadFields = null,
    ) {
    }

    public function getLabelTypeIds(): iterable|null
    {
        return $this->labelTypeIds;
    }

    public function getPriority(): int|null
    {
        return $this->priority;
    }

    public function getAssignees(): iterable|null
    {
        return $this->assignees;
    }

    public function getThreadFields(): iterable|null
    {
        return $this->threadFields;
    }
}
