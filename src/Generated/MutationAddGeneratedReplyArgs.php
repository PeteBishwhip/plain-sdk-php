<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddGeneratedReplyArgs implements MutationAddGeneratedReplyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddGeneratedReplyInput */
        private readonly AddGeneratedReplyInput $input,
    ) {
    }

    public function getInput(): AddGeneratedReplyInput
    {
        return $this->input;
    }
}
