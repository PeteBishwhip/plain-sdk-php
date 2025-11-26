<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateChatAppInput implements CreateChatAppInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var \Plain\Generated\WorkspaceFileInput|null */
        private readonly WorkspaceFileInput|null $logo = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLogo(): WorkspaceFileInput|null
    {
        return $this->logo;
    }
}
