<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateCustomRoleInput implements CreateCustomRoleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var string|null */
        private readonly string|null $description = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }
}
