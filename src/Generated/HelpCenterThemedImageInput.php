<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterThemedImageInput implements HelpCenterThemedImageInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\WorkspaceFileInput */
        private readonly WorkspaceFileInput $light,
        /** @var \Plain\Generated\WorkspaceFileInput */
        private readonly WorkspaceFileInput $dark,
    ) {
    }

    public function getLight(): WorkspaceFileInput
    {
        return $this->light;
    }

    public function getDark(): WorkspaceFileInput
    {
        return $this->dark;
    }
}
