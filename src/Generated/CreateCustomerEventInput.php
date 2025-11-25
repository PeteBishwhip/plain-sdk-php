<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateCustomerEventInput implements CreateCustomerEventInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CustomerIdentifierInput */
        private readonly CustomerIdentifierInput $customerIdentifier,
        /** @var string */
        private readonly string $title,
        /** @var iterable<int, \Plain\Generated\EventComponentInput> */
        private readonly iterable $components,
        /** @var string|null */
        private readonly string|null $externalId = null,
        /** @var string|null */
        private readonly string|null $timestamp = null,
    ) {
    }

    public function getCustomerIdentifier(): CustomerIdentifierInput
    {
        return $this->customerIdentifier;
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getComponents(): iterable
    {
        return $this->components;
    }

    public function getTimestamp(): string|null
    {
        return $this->timestamp;
    }
}
