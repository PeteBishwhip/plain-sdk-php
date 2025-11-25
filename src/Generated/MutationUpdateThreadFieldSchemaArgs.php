<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateThreadFieldSchemaArgs implements MutationUpdateThreadFieldSchemaArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateThreadFieldSchemaInput */
        private readonly UpdateThreadFieldSchemaInput $input,
    ) {
    }

    public function getInput(): UpdateThreadFieldSchemaInput
    {
        return $this->input;
    }
}
