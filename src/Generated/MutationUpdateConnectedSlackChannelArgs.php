<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateConnectedSlackChannelArgs implements MutationUpdateConnectedSlackChannelArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateConnectedSlackChannelInput */
        private readonly UpdateConnectedSlackChannelInput $input,
    ) {
    }

    public function getInput(): UpdateConnectedSlackChannelInput
    {
        return $this->input;
    }
}
