<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateIndexedDocumentArgs implements MutationCreateIndexedDocumentArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateIndexedDocumentInput */
        private readonly CreateIndexedDocumentInput $input,
    ) {
    }

    public function getInput(): CreateIndexedDocumentInput
    {
        return $this->input;
    }
}
