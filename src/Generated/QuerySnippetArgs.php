<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySnippetArgs implements QuerySnippetArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $snippetId,
    ) {
    }

    public function getSnippetId(): string
    {
        return $this->snippetId;
    }
}
