<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class BulkUpsertThreadFieldsInput implements BulkUpsertThreadFieldsInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\UpsertThreadFieldInput> */
        private readonly iterable $inputs,
    ) {
    }

    public function getInputs(): iterable
    {
        return $this->inputs;
    }
}
