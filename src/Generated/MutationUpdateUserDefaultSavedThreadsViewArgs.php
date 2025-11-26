<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateUserDefaultSavedThreadsViewArgs implements MutationUpdateUserDefaultSavedThreadsViewArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateUserDefaultSavedThreadsViewInput */
        private readonly UpdateUserDefaultSavedThreadsViewInput $input,
    ) {
    }

    public function getInput(): UpdateUserDefaultSavedThreadsViewInput
    {
        return $this->input;
    }
}
