<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteServiceLevelAgreementArgs implements MutationDeleteServiceLevelAgreementArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteServiceLevelAgreementInput */
        private readonly DeleteServiceLevelAgreementInput $input,
    ) {
    }

    public function getInput(): DeleteServiceLevelAgreementInput
    {
        return $this->input;
    }
}
