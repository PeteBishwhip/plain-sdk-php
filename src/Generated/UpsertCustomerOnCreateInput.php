<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertCustomerOnCreateInput implements UpsertCustomerOnCreateInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $fullName,
        /** @var \Plain\Generated\EmailAddressInput */
        private readonly EmailAddressInput $email,
        /** @var string|null */
        private readonly string|null $externalId = null,
        /** @var string|null */
        private readonly string|null $shortName = null,
        /** @var iterable<int, \Plain\Generated\CustomerGroupIdentifier>|null */
        private readonly iterable|null $customerGroupIdentifiers = null,
        /** @var iterable<int, \Plain\Generated\TenantIdentifierInput>|null */
        private readonly iterable|null $tenantIdentifiers = null,
    ) {
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getShortName(): string|null
    {
        return $this->shortName;
    }

    public function getEmail(): EmailAddressInput
    {
        return $this->email;
    }

    public function getCustomerGroupIdentifiers(): iterable|null
    {
        return $this->customerGroupIdentifiers;
    }

    public function getTenantIdentifiers(): iterable|null
    {
        return $this->tenantIdentifiers;
    }
}
