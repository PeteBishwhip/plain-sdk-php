<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationShareThreadToUserInSlackArgs implements MutationShareThreadToUserInSlackArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ShareThreadToUserInSlackInput */
        private readonly ShareThreadToUserInSlackInput $input,
    ) {
    }

    public function getInput(): ShareThreadToUserInSlackInput
    {
        return $this->input;
    }
}
