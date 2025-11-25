<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateThreadTenantArgs implements MutationUpdateThreadTenantArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateThreadTenantInput */
        private readonly UpdateThreadTenantInput $input,
    ) {
    }

    public function getInput(): UpdateThreadTenantInput
    {
        return $this->input;
    }
}
