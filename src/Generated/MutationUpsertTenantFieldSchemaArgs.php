<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertTenantFieldSchemaArgs implements MutationUpsertTenantFieldSchemaArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertTenantFieldSchemaInput */
        private readonly UpsertTenantFieldSchemaInput $input,
    ) {
    }

    public function getInput(): UpsertTenantFieldSchemaInput
    {
        return $this->input;
    }
}
