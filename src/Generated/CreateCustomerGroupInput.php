<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateCustomerGroupInput implements CreateCustomerGroupInputInterface
{
    public function __construct(
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
