<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUnarchiveLabelTypeArgs implements MutationUnarchiveLabelTypeArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UnarchiveLabelTypeInput */
        private readonly UnarchiveLabelTypeInput $input,
    ) {
    }

    public function getInput(): UnarchiveLabelTypeInput
    {
        return $this->input;
    }
}
