<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationSnoozeThreadArgs implements MutationSnoozeThreadArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\SnoozeThreadInput */
        private readonly SnoozeThreadInput $input,
    ) {
    }

    public function getInput(): SnoozeThreadInput
    {
        return $this->input;
    }
}
