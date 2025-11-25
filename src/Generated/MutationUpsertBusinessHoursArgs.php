<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertBusinessHoursArgs implements MutationUpsertBusinessHoursArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertBusinessHoursInput */
        private readonly UpsertBusinessHoursInput $input,
    ) {
    }

    public function getInput(): UpsertBusinessHoursInput
    {
        return $this->input;
    }
}
