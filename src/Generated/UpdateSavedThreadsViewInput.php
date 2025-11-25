<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateSavedThreadsViewInput implements UpdateSavedThreadsViewInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $savedThreadsViewId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $icon = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $color = null,
        /** @var \Plain\Generated\SavedThreadsViewFilterInput|null */
        private readonly SavedThreadsViewFilterInput|null $threadsFilter = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isHidden = null,
    ) {
    }

    public function getSavedThreadsViewId(): string
    {
        return $this->savedThreadsViewId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getIcon(): StringInput|null
    {
        return $this->icon;
    }

    public function getColor(): StringInput|null
    {
        return $this->color;
    }

    public function getThreadsFilter(): SavedThreadsViewFilterInput|null
    {
        return $this->threadsFilter;
    }

    public function getIsHidden(): BooleanInput|null
    {
        return $this->isHidden;
    }
}
