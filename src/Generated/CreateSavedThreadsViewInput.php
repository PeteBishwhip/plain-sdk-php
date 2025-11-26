<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateSavedThreadsViewInput implements CreateSavedThreadsViewInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $icon,
        /** @var string */
        private readonly string $color,
        /** @var \Plain\Generated\SavedThreadsViewFilterInput */
        private readonly SavedThreadsViewFilterInput $threadsFilter,
        /** @var bool|null */
        private readonly bool|null $isHidden = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getThreadsFilter(): SavedThreadsViewFilterInput
    {
        return $this->threadsFilter;
    }

    public function getIsHidden(): bool|null
    {
        return $this->isHidden;
    }
}
