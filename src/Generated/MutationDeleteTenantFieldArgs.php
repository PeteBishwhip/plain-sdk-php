<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteTenantFieldArgs implements MutationDeleteTenantFieldArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteTenantFieldInput */
        private readonly DeleteTenantFieldInput $input,
    ) {
    }

    public function getInput(): DeleteTenantFieldInput
    {
        return $this->input;
    }
}
