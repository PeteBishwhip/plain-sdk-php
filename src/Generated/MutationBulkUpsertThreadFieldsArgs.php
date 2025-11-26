<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationBulkUpsertThreadFieldsArgs implements MutationBulkUpsertThreadFieldsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\BulkUpsertThreadFieldsInput */
        private readonly BulkUpsertThreadFieldsInput $input,
    ) {
    }

    public function getInput(): BulkUpsertThreadFieldsInput
    {
        return $this->input;
    }
}
