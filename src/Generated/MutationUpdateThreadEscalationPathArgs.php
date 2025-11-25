<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateThreadEscalationPathArgs implements MutationUpdateThreadEscalationPathArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateThreadEscalationPathInput */
        private readonly UpdateThreadEscalationPathInput $input,
    ) {
    }

    public function getInput(): UpdateThreadEscalationPathInput
    {
        return $this->input;
    }
}
