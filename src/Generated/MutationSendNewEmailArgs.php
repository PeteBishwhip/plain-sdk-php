<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSendNewEmailArgs implements MutationSendNewEmailArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SendNewEmailInput */
        private readonly SendNewEmailInput $input,
    ) {
    }

    public function getInput(): SendNewEmailInput
    {
        return $this->input;
    }
}
