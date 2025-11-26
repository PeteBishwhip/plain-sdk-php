<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertCustomerIdentifierInput implements UpsertCustomerIdentifierInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $externalId = null,
        /** @var string|null */
        private readonly string|null $emailAddress = null,
        /** @var string|null */
        private readonly string|null $customerId = null,
    ) {
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }

    public function getEmailAddress(): string|null
    {
        return $this->emailAddress;
    }

    public function getCustomerId(): string|null
    {
        return $this->customerId;
    }
}
