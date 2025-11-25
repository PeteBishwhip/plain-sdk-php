<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertCustomerGroupInput implements UpsertCustomerGroupInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CustomerGroupIdentifier */
        private readonly CustomerGroupIdentifier $identifier,
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $key,
        /** @var string */
        private readonly string $color,
        /** @var string|null */
        private readonly string|null $externalId = null,
    ) {
    }

    public function getIdentifier(): CustomerGroupIdentifier
    {
        return $this->identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }
}
