<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterWorkosAuthkitAuthMechanismInput implements HelpCenterWorkosAuthkitAuthMechanismInputInterface
{
    public function __construct(
        /** @var bool|null */
        private readonly bool|null $ignore = null,
    ) {
    }

    public function getIgnore(): bool|null
    {
        return $this->ignore;
    }
}
