<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateCustomerCardConfigInput implements CreateCustomerCardConfigInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $title,
        /** @var string */
        private readonly string $key,
        /** @var int */
        private readonly int $defaultTimeToLiveSeconds,
        /** @var string */
        private readonly string $apiUrl,
        /** @var iterable<int, \Plain\Generated\CustomerCardConfigApiHeaderInput> */
        private readonly iterable $apiHeaders,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getDefaultTimeToLiveSeconds(): int
    {
        return $this->defaultTimeToLiveSeconds;
    }

    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    public function getApiHeaders(): iterable
    {
        return $this->apiHeaders;
    }
}
