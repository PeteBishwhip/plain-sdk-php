<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteSnippetInput implements DeleteSnippetInputInterface
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
