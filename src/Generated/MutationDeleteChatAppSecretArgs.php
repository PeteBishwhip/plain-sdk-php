<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteChatAppSecretArgs implements MutationDeleteChatAppSecretArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteChatAppSecretInput */
        private readonly DeleteChatAppSecretInput $input,
    ) {
    }

    public function getInput(): DeleteChatAppSecretInput
    {
        return $this->input;
    }
}
