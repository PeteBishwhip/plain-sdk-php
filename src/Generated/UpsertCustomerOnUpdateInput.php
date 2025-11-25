<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertCustomerOnUpdateInput implements UpsertCustomerOnUpdateInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $externalId = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $fullName = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $shortName = null,
        /** @var \Plain\Generated\EmailAddressInput|null */
        private readonly EmailAddressInput|null $email = null,
    ) {
    }

    public function getExternalId(): OptionalStringInput|null
    {
        return $this->externalId;
    }

    public function getFullName(): StringInput|null
    {
        return $this->fullName;
    }

    public function getShortName(): OptionalStringInput|null
    {
        return $this->shortName;
    }

    public function getEmail(): EmailAddressInput|null
    {
        return $this->email;
    }
}
