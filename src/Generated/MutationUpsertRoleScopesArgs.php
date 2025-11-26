<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertRoleScopesArgs implements MutationUpsertRoleScopesArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertRoleScopesInput */
        private readonly UpsertRoleScopesInput $input,
    ) {
    }

    public function getInput(): UpsertRoleScopesInput
    {
        return $this->input;
    }
}
