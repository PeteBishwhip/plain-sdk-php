<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSendSlackMessageArgs implements MutationSendSlackMessageArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SendSlackMessageInput */
        private readonly SendSlackMessageInput $input,
    ) {
    }

    public function getInput(): SendSlackMessageInput
    {
        return $this->input;
    }
}
