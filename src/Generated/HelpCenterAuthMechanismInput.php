<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterAuthMechanismInput implements HelpCenterAuthMechanismInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\HelpCenterWorkosAuthkitAuthMechanismInput|null */
        private readonly HelpCenterWorkosAuthkitAuthMechanismInput|null $workosAuthkitAuthMechanism = null,
        /** @var \Plain\Generated\WorkosConnectAuthMechanismInput|null */
        private readonly WorkosConnectAuthMechanismInput|null $workosConnectAuthMechanism = null,
    ) {
    }

    public function getWorkosAuthkitAuthMechanism(): HelpCenterWorkosAuthkitAuthMechanismInput|null
    {
        return $this->workosAuthkitAuthMechanism;
    }

    public function getWorkosConnectAuthMechanism(): WorkosConnectAuthMechanismInput|null
    {
        return $this->workosConnectAuthMechanism;
    }
}
