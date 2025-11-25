<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationReorderThreadFieldSchemasArgs implements MutationReorderThreadFieldSchemasArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ReorderThreadFieldSchemasInput */
        private readonly ReorderThreadFieldSchemasInput $input,
    ) {
    }

    public function getInput(): ReorderThreadFieldSchemasInput
    {
        return $this->input;
    }
}
