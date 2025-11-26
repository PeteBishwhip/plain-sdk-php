<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateChatAppArgs implements MutationCreateChatAppArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateChatAppInput */
        private readonly CreateChatAppInput $input,
    ) {
    }

    public function getInput(): CreateChatAppInput
    {
        return $this->input;
    }
}
