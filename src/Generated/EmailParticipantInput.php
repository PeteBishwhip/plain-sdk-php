<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class EmailParticipantInput implements EmailParticipantInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $email,
        /** @var string|null */
        private readonly string|null $name = null,
    ) {
    }

    public function getName(): string|null
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
