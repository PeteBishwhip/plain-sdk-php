<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentCopyButtonInput implements ComponentCopyButtonInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $copyButtonValue,
        /** @var string|null */
        private readonly string|null $copyButtonTooltipLabel = null,
    ) {
    }

    public function getCopyButtonValue(): string
    {
        return $this->copyButtonValue;
    }

    public function getCopyButtonTooltipLabel(): string|null
    {
        return $this->copyButtonTooltipLabel;
    }
}
