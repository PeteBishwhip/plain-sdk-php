<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteCompanyArgs implements MutationDeleteCompanyArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteCompanyInput */
        private readonly DeleteCompanyInput $input,
    ) {
    }

    public function getInput(): DeleteCompanyInput
    {
        return $this->input;
    }
}
