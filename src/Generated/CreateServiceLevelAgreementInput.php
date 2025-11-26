<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateServiceLevelAgreementInput implements CreateServiceLevelAgreementInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $tierId,
        /** @var \Plain\Generated\ServiceLevelAgreementInput */
        private readonly ServiceLevelAgreementInput $serviceLevelAgreement,
    ) {
    }

    public function getTierId(): string
    {
        return $this->tierId;
    }

    public function getServiceLevelAgreement(): ServiceLevelAgreementInput
    {
        return $this->serviceLevelAgreement;
    }
}
