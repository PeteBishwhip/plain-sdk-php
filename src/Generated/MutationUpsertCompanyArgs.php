<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertCompanyArgs implements MutationUpsertCompanyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertCompanyInput */
        private readonly UpsertCompanyInput $input,
    ) {
    }

    public function getInput(): UpsertCompanyInput
    {
        return $this->input;
    }
}
