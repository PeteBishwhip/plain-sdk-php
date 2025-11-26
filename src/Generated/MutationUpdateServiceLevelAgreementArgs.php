<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateServiceLevelAgreementArgs implements MutationUpdateServiceLevelAgreementArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateServiceLevelAgreementInput */
        private readonly UpdateServiceLevelAgreementInput $input,
    ) {
    }

    public function getInput(): UpdateServiceLevelAgreementInput
    {
        return $this->input;
    }
}
