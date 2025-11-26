<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationReorderAutorespondersArgs implements MutationReorderAutorespondersArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ReorderAutorespondersInput */
        private readonly ReorderAutorespondersInput $input,
    ) {
    }

    public function getInput(): ReorderAutorespondersInput
    {
        return $this->input;
    }
}
