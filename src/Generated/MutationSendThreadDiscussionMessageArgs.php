<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSendThreadDiscussionMessageArgs implements MutationSendThreadDiscussionMessageArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SendThreadDiscussionMessageInput */
        private readonly SendThreadDiscussionMessageInput $input,
    ) {
    }

    public function getInput(): SendThreadDiscussionMessageInput
    {
        return $this->input;
    }
}
