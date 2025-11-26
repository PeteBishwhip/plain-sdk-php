<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateThreadFieldSchemaArgs implements MutationCreateThreadFieldSchemaArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateThreadFieldSchemaInput */
        private readonly CreateThreadFieldSchemaInput $input,
    ) {
    }

    public function getInput(): CreateThreadFieldSchemaInput
    {
        return $this->input;
    }
}
