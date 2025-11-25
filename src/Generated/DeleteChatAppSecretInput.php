<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteChatAppSecretInput implements DeleteChatAppSecretInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $chatAppId,
    ) {
    }

    public function getChatAppId(): string
    {
        return $this->chatAppId;
    }
}
