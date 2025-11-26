<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveTenantFieldSchemaMappingArgs implements MutationRemoveTenantFieldSchemaMappingArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveTenantFieldSchemaMappingInput */
        private readonly RemoveTenantFieldSchemaMappingInput $input,
    ) {
    }

    public function getInput(): RemoveTenantFieldSchemaMappingInput
    {
        return $this->input;
    }
}
