<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddAdditionalAssigneesArgs implements MutationAddAdditionalAssigneesArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddAdditionalAssigneesInput */
        private readonly AddAdditionalAssigneesInput $input,
    ) {
    }

    public function getInput(): AddAdditionalAssigneesInput
    {
        return $this->input;
    }
}
