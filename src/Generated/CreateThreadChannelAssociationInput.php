<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateThreadChannelAssociationInput implements CreateThreadChannelAssociationInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CompanyIdentifierInput */
        private readonly CompanyIdentifierInput $companyIdentifier,
        /** @var string|null */
        private readonly string|null $connectedSlackChannelId = null,
    ) {
    }

    public function getCompanyIdentifier(): CompanyIdentifierInput
    {
        return $this->companyIdentifier;
    }

    public function getConnectedSlackChannelId(): string|null
    {
        return $this->connectedSlackChannelId;
    }
}
