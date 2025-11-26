<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateSavedThreadsViewArgs implements MutationUpdateSavedThreadsViewArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateSavedThreadsViewInput */
        private readonly UpdateSavedThreadsViewInput $input,
    ) {
    }

    public function getInput(): UpdateSavedThreadsViewInput
    {
        return $this->input;
    }
}
