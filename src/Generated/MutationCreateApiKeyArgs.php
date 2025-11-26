<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateApiKeyArgs implements MutationCreateApiKeyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateApiKeyInput */
        private readonly CreateApiKeyInput $input,
    ) {
    }

    public function getInput(): CreateApiKeyInput
    {
        return $this->input;
    }
}
