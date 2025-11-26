<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationReplyToThreadArgs implements MutationReplyToThreadArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ReplyToThreadInput */
        private readonly ReplyToThreadInput $input,
    ) {
    }

    public function getInput(): ReplyToThreadInput
    {
        return $this->input;
    }
}
