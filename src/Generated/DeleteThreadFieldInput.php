<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteThreadFieldInput implements DeleteThreadFieldInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteThreadFieldIdentifier */
        private readonly DeleteThreadFieldIdentifier $identifier,
    ) {
    }

    public function getIdentifier(): DeleteThreadFieldIdentifier
    {
        return $this->identifier;
    }
}
