<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveLabelsFromUserArgs implements MutationRemoveLabelsFromUserArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveLabelsFromUserInput */
        private readonly RemoveLabelsFromUserInput $input,
    ) {
    }

    public function getInput(): RemoveLabelsFromUserInput
    {
        return $this->input;
    }
}
