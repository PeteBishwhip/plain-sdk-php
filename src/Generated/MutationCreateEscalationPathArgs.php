<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateEscalationPathArgs implements MutationCreateEscalationPathArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateEscalationPathInput */
        private readonly CreateEscalationPathInput $input,
    ) {
    }

    public function getInput(): CreateEscalationPathInput
    {
        return $this->input;
    }
}
