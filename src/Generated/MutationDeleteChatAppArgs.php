<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteChatAppArgs implements MutationDeleteChatAppArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteChatAppInput */
        private readonly DeleteChatAppInput $input,
    ) {
    }

    public function getInput(): DeleteChatAppInput
    {
        return $this->input;
    }
}
