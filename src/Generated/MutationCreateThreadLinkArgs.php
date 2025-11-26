<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateThreadLinkArgs implements MutationCreateThreadLinkArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateThreadLinkInput */
        private readonly CreateThreadLinkInput $input,
    ) {
    }

    public function getInput(): CreateThreadLinkInput
    {
        return $this->input;
    }
}
