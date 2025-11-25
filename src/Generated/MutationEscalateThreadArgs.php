<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationEscalateThreadArgs implements MutationEscalateThreadArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\EscalateThreadInput */
        private readonly EscalateThreadInput $input,
    ) {
    }

    public function getInput(): EscalateThreadInput
    {
        return $this->input;
    }
}
