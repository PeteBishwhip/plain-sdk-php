<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateSnippetArgs implements MutationUpdateSnippetArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateSnippetInput */
        private readonly UpdateSnippetInput $input,
    ) {
    }

    public function getInput(): UpdateSnippetInput
    {
        return $this->input;
    }
}
