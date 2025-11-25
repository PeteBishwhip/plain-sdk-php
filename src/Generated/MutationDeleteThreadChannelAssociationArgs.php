<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteThreadChannelAssociationArgs implements MutationDeleteThreadChannelAssociationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteThreadChannelAssociationInput */
        private readonly DeleteThreadChannelAssociationInput $input,
    ) {
    }

    public function getInput(): DeleteThreadChannelAssociationInput
    {
        return $this->input;
    }
}
