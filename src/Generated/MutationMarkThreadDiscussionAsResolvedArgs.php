<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationMarkThreadDiscussionAsResolvedArgs implements MutationMarkThreadDiscussionAsResolvedArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\MarkThreadDiscussionAsResolvedInput */
        private readonly MarkThreadDiscussionAsResolvedInput $input,
    ) {
    }

    public function getInput(): MarkThreadDiscussionAsResolvedInput
    {
        return $this->input;
    }
}
