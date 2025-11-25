<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteSnippetArgs implements MutationDeleteSnippetArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteSnippetInput */
        private readonly DeleteSnippetInput $input,
    ) {
    }

    public function getInput(): DeleteSnippetInput
    {
        return $this->input;
    }
}
