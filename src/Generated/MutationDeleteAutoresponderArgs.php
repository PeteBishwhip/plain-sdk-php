<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteAutoresponderArgs implements MutationDeleteAutoresponderArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteAutoresponderInput */
        private readonly DeleteAutoresponderInput $input,
    ) {
    }

    public function getInput(): DeleteAutoresponderInput
    {
        return $this->input;
    }
}
