<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateServiceLevelAgreementArgs implements MutationCreateServiceLevelAgreementArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateServiceLevelAgreementInput */
        private readonly CreateServiceLevelAgreementInput $input,
    ) {
    }

    public function getInput(): CreateServiceLevelAgreementInput
    {
        return $this->input;
    }
}
