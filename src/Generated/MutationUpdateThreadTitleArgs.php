<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateThreadTitleArgs implements MutationUpdateThreadTitleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateThreadTitleInput */
        private readonly UpdateThreadTitleInput $input,
    ) {
    }

    public function getInput(): UpdateThreadTitleInput
    {
        return $this->input;
    }
}
