<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSendMSTeamsMessageArgs implements MutationSendMSTeamsMessageArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SendMSTeamsMessageInput */
        private readonly SendMSTeamsMessageInput $input,
    ) {
    }

    public function getInput(): SendMSTeamsMessageInput
    {
        return $this->input;
    }
}
