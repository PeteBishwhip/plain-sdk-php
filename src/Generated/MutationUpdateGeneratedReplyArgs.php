<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateGeneratedReplyArgs implements MutationUpdateGeneratedReplyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateGeneratedReplyInput */
        private readonly UpdateGeneratedReplyInput $input,
    ) {
    }

    public function getInput(): UpdateGeneratedReplyInput
    {
        return $this->input;
    }
}
