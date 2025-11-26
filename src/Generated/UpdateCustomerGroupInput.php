<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateCustomerGroupInput implements UpdateCustomerGroupInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerGroupId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $key = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $color = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $externalId = null,
    ) {
    }

    public function getCustomerGroupId(): string
    {
        return $this->customerGroupId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getKey(): StringInput|null
    {
        return $this->key;
    }

    public function getColor(): StringInput|null
    {
        return $this->color;
    }

    public function getExternalId(): OptionalStringInput|null
    {
        return $this->externalId;
    }
}
