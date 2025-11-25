<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveLabelsArgs implements MutationRemoveLabelsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveLabelsInput */
        private readonly RemoveLabelsInput $input,
    ) {
    }

    public function getInput(): RemoveLabelsInput
    {
        return $this->input;
    }
}
