<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationReplyToEmailArgs implements MutationReplyToEmailArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ReplyToEmailInput */
        private readonly ReplyToEmailInput $input,
    ) {
    }

    public function getInput(): ReplyToEmailInput
    {
        return $this->input;
    }
}
