<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveAdditionalAssigneesArgs implements MutationRemoveAdditionalAssigneesArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveAdditionalAssigneesInput */
        private readonly RemoveAdditionalAssigneesInput $input,
    ) {
    }

    public function getInput(): RemoveAdditionalAssigneesInput
    {
        return $this->input;
    }
}
