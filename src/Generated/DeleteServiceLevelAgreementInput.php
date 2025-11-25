<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteServiceLevelAgreementInput implements DeleteServiceLevelAgreementInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $serviceLevelAgreementId,
    ) {
    }

    public function getServiceLevelAgreementId(): string
    {
        return $this->serviceLevelAgreementId;
    }
}
