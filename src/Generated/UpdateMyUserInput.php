<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateMyUserInput implements UpdateMyUserInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $fullName = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $publicName = null,
    ) {
    }

    public function getFullName(): OptionalStringInput|null
    {
        return $this->fullName;
    }

    public function getPublicName(): OptionalStringInput|null
    {
        return $this->publicName;
    }
}
