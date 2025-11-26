<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationToggleSlackMessageReactionArgs implements MutationToggleSlackMessageReactionArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ToggleSlackMessageReactionInput */
        private readonly ToggleSlackMessageReactionInput $input,
    ) {
    }

    public function getInput(): ToggleSlackMessageReactionInput
    {
        return $this->input;
    }
}
