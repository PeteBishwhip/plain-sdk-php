<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertTenantFieldArgs implements MutationUpsertTenantFieldArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertTenantFieldInput */
        private readonly UpsertTenantFieldInput $input,
    ) {
    }

    public function getInput(): UpsertTenantFieldInput
    {
        return $this->input;
    }
}
