<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateAutoresponderArgs implements MutationUpdateAutoresponderArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateAutoresponderInput */
        private readonly UpdateAutoresponderInput $input,
    ) {
    }

    public function getInput(): UpdateAutoresponderInput
    {
        return $this->input;
    }
}
