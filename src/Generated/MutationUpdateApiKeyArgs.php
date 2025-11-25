<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateApiKeyArgs implements MutationUpdateApiKeyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateApiKeyInput */
        private readonly UpdateApiKeyInput $input,
    ) {
    }

    public function getInput(): UpdateApiKeyInput
    {
        return $this->input;
    }
}
