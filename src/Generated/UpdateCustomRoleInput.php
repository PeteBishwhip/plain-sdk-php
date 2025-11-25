<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateCustomRoleInput implements UpdateCustomRoleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customRoleId,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $name = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $description = null,
    ) {
    }

    public function getCustomRoleId(): string
    {
        return $this->customRoleId;
    }

    public function getName(): OptionalStringInput|null
    {
        return $this->name;
    }

    public function getDescription(): OptionalStringInput|null
    {
        return $this->description;
    }
}
