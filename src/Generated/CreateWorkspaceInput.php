<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateWorkspaceInput implements CreateWorkspaceInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $publicName,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPublicName(): string
    {
        return $this->publicName;
    }
}
