<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateUserAccountInput implements CreateUserAccountInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $fullName,
        /** @var string */
        private readonly string $publicName,
        /** @var bool|null */
        private readonly bool|null $marketingConsent = null,
    ) {
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getPublicName(): string
    {
        return $this->publicName;
    }

    public function getMarketingConsent(): bool|null
    {
        return $this->marketingConsent;
    }
}
