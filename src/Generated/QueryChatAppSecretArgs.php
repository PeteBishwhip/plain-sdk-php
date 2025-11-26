<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryChatAppSecretArgs implements QueryChatAppSecretArgsInterface
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
