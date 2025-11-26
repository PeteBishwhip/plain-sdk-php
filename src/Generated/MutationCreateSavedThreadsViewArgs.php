<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateSavedThreadsViewArgs implements MutationCreateSavedThreadsViewArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateSavedThreadsViewInput */
        private readonly CreateSavedThreadsViewInput $input,
    ) {
    }

    public function getInput(): CreateSavedThreadsViewInput
    {
        return $this->input;
    }
}
