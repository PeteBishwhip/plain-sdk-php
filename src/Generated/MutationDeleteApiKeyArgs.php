<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteApiKeyArgs implements MutationDeleteApiKeyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteApiKeyInput */
        private readonly DeleteApiKeyInput $input,
    ) {
    }

    public function getInput(): DeleteApiKeyInput
    {
        return $this->input;
    }
}
