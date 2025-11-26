<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteEscalationPathArgs implements MutationDeleteEscalationPathArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteEscalationPathInput */
        private readonly DeleteEscalationPathInput $input,
    ) {
    }

    public function getInput(): DeleteEscalationPathInput
    {
        return $this->input;
    }
}
