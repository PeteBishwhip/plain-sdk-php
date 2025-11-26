<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateThreadChannelAssociationArgs implements MutationCreateThreadChannelAssociationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateThreadChannelAssociationInput */
        private readonly CreateThreadChannelAssociationInput $input,
    ) {
    }

    public function getInput(): CreateThreadChannelAssociationInput
    {
        return $this->input;
    }
}
