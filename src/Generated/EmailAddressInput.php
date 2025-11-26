<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class EmailAddressInput implements EmailAddressInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $email,
        /** @var bool */
        private readonly bool $isVerified,
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }
}
