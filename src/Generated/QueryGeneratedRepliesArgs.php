<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryGeneratedRepliesArgs implements QueryGeneratedRepliesArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var iterable<int, \Plain\Generated\GenerateReplyOption>|null */
        private readonly iterable|null $options = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getOptions(): iterable|null
    {
        return $this->options;
    }
}
