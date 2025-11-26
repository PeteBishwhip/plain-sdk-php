<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateChatAppArgs implements MutationUpdateChatAppArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateChatAppInput */
        private readonly UpdateChatAppInput $input,
    ) {
    }

    public function getInput(): UpdateChatAppInput
    {
        return $this->input;
    }
}
