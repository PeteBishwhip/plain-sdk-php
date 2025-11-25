<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteTenantFieldSchemaArgs implements MutationDeleteTenantFieldSchemaArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteTenantFieldSchemaInput */
        private readonly DeleteTenantFieldSchemaInput $input,
    ) {
    }

    public function getInput(): DeleteTenantFieldSchemaInput
    {
        return $this->input;
    }
}
