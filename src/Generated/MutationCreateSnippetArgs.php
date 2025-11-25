<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateSnippetArgs implements MutationCreateSnippetArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateSnippetInput */
        private readonly CreateSnippetInput $input,
    ) {
    }

    public function getInput(): CreateSnippetInput
    {
        return $this->input;
    }
}
