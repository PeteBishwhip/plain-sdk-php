<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertTenantInput implements UpsertTenantInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\TenantIdentifierInput */
        private readonly TenantIdentifierInput $identifier,
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $externalId,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $url = null,
    ) {
    }

    public function getIdentifier(): TenantIdentifierInput
    {
        return $this->identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }

    public function getUrl(): OptionalStringInput|null
    {
        return $this->url;
    }
}
