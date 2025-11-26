<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentDividerInput implements ComponentDividerInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\ComponentDividerSpacingSize|null */
        private readonly ComponentDividerSpacingSize|null $dividerSpacingSize = null,
        /** @var \Plain\Generated\ComponentDividerSpacingSize|null */
        private readonly ComponentDividerSpacingSize|null $spacingSize = null,
    ) {
    }

    public function getDividerSpacingSize(): ComponentDividerSpacingSize|null
    {
        return $this->dividerSpacingSize;
    }

    public function getSpacingSize(): ComponentDividerSpacingSize|null
    {
        return $this->spacingSize;
    }
}
