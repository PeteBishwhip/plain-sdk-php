<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSetupTenantFieldSchemaMappingArgs implements MutationSetupTenantFieldSchemaMappingArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SetupTenantFieldSchemaMappingInput */
        private readonly SetupTenantFieldSchemaMappingInput $input,
    ) {
    }

    public function getInput(): SetupTenantFieldSchemaMappingInput
    {
        return $this->input;
    }
}
