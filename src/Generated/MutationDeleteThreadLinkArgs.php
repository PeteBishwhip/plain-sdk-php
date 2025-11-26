<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteThreadLinkArgs implements MutationDeleteThreadLinkArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteThreadLinkInput */
        private readonly DeleteThreadLinkInput $input,
    ) {
    }

    public function getInput(): DeleteThreadLinkInput
    {
        return $this->input;
    }
}
