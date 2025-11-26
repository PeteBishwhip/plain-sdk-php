<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationArchiveLabelTypeArgs implements MutationArchiveLabelTypeArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ArchiveLabelTypeInput */
        private readonly ArchiveLabelTypeInput $input,
    ) {
    }

    public function getInput(): ArchiveLabelTypeInput
    {
        return $this->input;
    }
}
