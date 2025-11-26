<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSendChatArgs implements MutationSendChatArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SendChatInput */
        private readonly SendChatInput $input,
    ) {
    }

    public function getInput(): SendChatInput
    {
        return $this->input;
    }
}
