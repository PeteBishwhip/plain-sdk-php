<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateChatAppSecretArgs implements MutationCreateChatAppSecretArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateChatAppSecretInput */
        private readonly CreateChatAppSecretInput $input,
    ) {
    }

    public function getInput(): CreateChatAppSecretInput
    {
        return $this->input;
    }
}
