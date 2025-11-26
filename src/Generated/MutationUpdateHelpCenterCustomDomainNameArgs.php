<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateHelpCenterCustomDomainNameArgs implements MutationUpdateHelpCenterCustomDomainNameArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateHelpCenterCustomDomainNameInput */
        private readonly UpdateHelpCenterCustomDomainNameInput $input,
    ) {
    }

    public function getInput(): UpdateHelpCenterCustomDomainNameInput
    {
        return $this->input;
    }
}
