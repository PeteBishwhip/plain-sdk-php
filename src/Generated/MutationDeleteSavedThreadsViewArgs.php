<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteSavedThreadsViewArgs implements MutationDeleteSavedThreadsViewArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteSavedThreadsViewInput */
        private readonly DeleteSavedThreadsViewInput $input,
    ) {
    }

    public function getInput(): DeleteSavedThreadsViewInput
    {
        return $this->input;
    }
}
