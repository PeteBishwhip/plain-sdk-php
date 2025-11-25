<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateThreadDiscussionArgs implements MutationCreateThreadDiscussionArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateThreadDiscussionInput */
        private readonly CreateThreadDiscussionInput $input,
    ) {
    }

    public function getInput(): CreateThreadDiscussionInput
    {
        return $this->input;
    }
}
