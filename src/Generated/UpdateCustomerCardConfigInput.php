<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateCustomerCardConfigInput implements UpdateCustomerCardConfigInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customerCardConfigId,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $order = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $title = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $key = null,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $defaultTimeToLiveSeconds = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $apiUrl = null,
        /** @var iterable<int, \Plain\Generated\CustomerCardConfigApiHeaderInput>|null */
        private readonly iterable|null $apiHeaders = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isEnabled = null,
    ) {
    }

    public function getCustomerCardConfigId(): string
    {
        return $this->customerCardConfigId;
    }

    public function getOrder(): IntInput|null
    {
        return $this->order;
    }

    public function getTitle(): StringInput|null
    {
        return $this->title;
    }

    public function getKey(): StringInput|null
    {
        return $this->key;
    }

    public function getDefaultTimeToLiveSeconds(): IntInput|null
    {
        return $this->defaultTimeToLiveSeconds;
    }

    public function getApiUrl(): StringInput|null
    {
        return $this->apiUrl;
    }

    public function getApiHeaders(): iterable|null
    {
        return $this->apiHeaders;
    }

    public function getIsEnabled(): BooleanInput|null
    {
        return $this->isEnabled;
    }
}
