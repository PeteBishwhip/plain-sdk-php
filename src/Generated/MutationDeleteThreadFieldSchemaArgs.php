<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteThreadFieldSchemaArgs implements MutationDeleteThreadFieldSchemaArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteThreadFieldSchemaInput */
        private readonly DeleteThreadFieldSchemaInput $input,
    ) {
    }

    public function getInput(): DeleteThreadFieldSchemaInput
    {
        return $this->input;
    }
}
