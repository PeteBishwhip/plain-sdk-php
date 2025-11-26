<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentBadgeInput implements ComponentBadgeInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $badgeLabel,
        /** @var \Plain\Generated\ComponentBadgeColor|null */
        private readonly ComponentBadgeColor|null $badgeColor = null,
    ) {
    }

    public function getBadgeLabel(): string
    {
        return $this->badgeLabel;
    }

    public function getBadgeColor(): ComponentBadgeColor|null
    {
        return $this->badgeColor;
    }
}
