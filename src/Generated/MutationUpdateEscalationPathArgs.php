<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateEscalationPathArgs implements MutationUpdateEscalationPathArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateEscalationPathInput */
        private readonly UpdateEscalationPathInput $input,
    ) {
    }

    public function getInput(): UpdateEscalationPathInput
    {
        return $this->input;
    }
}
