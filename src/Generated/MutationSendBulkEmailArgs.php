<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSendBulkEmailArgs implements MutationSendBulkEmailArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SendBulkEmailInput */
        private readonly SendBulkEmailInput $input,
    ) {
    }

    public function getInput(): SendBulkEmailInput
    {
        return $this->input;
    }
}
