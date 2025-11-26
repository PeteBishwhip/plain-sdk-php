<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteTenantArgs implements MutationDeleteTenantArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteTenantInput */
        private readonly DeleteTenantInput $input,
    ) {
    }

    public function getInput(): DeleteTenantInput
    {
        return $this->input;
    }
}
