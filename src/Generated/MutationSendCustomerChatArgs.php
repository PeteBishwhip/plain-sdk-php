<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSendCustomerChatArgs implements MutationSendCustomerChatArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SendCustomerChatInput */
        private readonly SendCustomerChatInput $input,
    ) {
    }

    public function getInput(): SendCustomerChatInput
    {
        return $this->input;
    }
}
