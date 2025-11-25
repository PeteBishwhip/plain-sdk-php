<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationVerifyHelpCenterCustomDomainNameArgs implements MutationVerifyHelpCenterCustomDomainNameArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\VerifyHelpCenterCustomDomainNameInput */
        private readonly VerifyHelpCenterCustomDomainNameInput $input,
    ) {
    }

    public function getInput(): VerifyHelpCenterCustomDomainNameInput
    {
        return $this->input;
    }
}
