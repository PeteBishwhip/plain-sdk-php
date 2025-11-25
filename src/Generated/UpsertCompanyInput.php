<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertCompanyInput implements UpsertCompanyInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CompanyIdentifierInput */
        private readonly CompanyIdentifierInput $identifier,
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $domainName,
        /** @var int|null */
        private readonly int|null $contractValue = null,
        /** @var string|null */
        private readonly string|null $accountOwnerUserId = null,
    ) {
    }

    public function getIdentifier(): CompanyIdentifierInput
    {
        return $this->identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDomainName(): string
    {
        return $this->domainName;
    }

    public function getContractValue(): int|null
    {
        return $this->contractValue;
    }

    public function getAccountOwnerUserId(): string|null
    {
        return $this->accountOwnerUserId;
    }
}
