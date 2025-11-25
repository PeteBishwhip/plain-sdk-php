<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertThreadFieldArgs implements MutationUpsertThreadFieldArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertThreadFieldInput */
        private readonly UpsertThreadFieldInput $input,
    ) {
    }

    public function getInput(): UpsertThreadFieldInput
    {
        return $this->input;
    }
}
