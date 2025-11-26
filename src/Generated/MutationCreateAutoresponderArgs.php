<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateAutoresponderArgs implements MutationCreateAutoresponderArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateAutoresponderInput */
        private readonly CreateAutoresponderInput $input,
    ) {
    }

    public function getInput(): CreateAutoresponderInput
    {
        return $this->input;
    }
}
