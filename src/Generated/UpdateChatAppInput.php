<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateChatAppInput implements UpdateChatAppInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $chatAppId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\WorkspaceFileInput|null */
        private readonly WorkspaceFileInput|null $logo = null,
    ) {
    }

    public function getChatAppId(): string
    {
        return $this->chatAppId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getLogo(): WorkspaceFileInput|null
    {
        return $this->logo;
    }
}
