<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateHelpCenterCustomDomainNameInput implements UpdateHelpCenterCustomDomainNameInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterId,
        /** @var \Plain\Generated\OptionalStringInput */
        private readonly OptionalStringInput $customDomainName,
    ) {
    }

    public function getHelpCenterId(): string
    {
        return $this->helpCenterId;
    }

    public function getCustomDomainName(): OptionalStringInput
    {
        return $this->customDomainName;
    }
}
