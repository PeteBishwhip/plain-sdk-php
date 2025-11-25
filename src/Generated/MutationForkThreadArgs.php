<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationForkThreadArgs implements MutationForkThreadArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ForkThreadInput */
        private readonly ForkThreadInput $input,
    ) {
    }

    public function getInput(): ForkThreadInput
    {
        return $this->input;
    }
}
