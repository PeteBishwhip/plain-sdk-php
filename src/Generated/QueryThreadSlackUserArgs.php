<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryThreadSlackUserArgs implements QueryThreadSlackUserArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $slackUserId,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getSlackUserId(): string
    {
        return $this->slackUserId;
    }
}
