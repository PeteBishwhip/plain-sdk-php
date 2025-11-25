<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSendDiscordMessageArgs implements MutationSendDiscordMessageArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SendDiscordMessageInput */
        private readonly SendDiscordMessageInput $input,
    ) {
    }

    public function getInput(): SendDiscordMessageInput
    {
        return $this->input;
    }
}
