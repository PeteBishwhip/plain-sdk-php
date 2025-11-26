<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertTenantArgs implements MutationUpsertTenantArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertTenantInput */
        private readonly UpsertTenantInput $input,
    ) {
    }

    public function getInput(): UpsertTenantInput
    {
        return $this->input;
    }
}
