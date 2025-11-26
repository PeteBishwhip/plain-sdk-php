<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateSettingArgs implements MutationUpdateSettingArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateSettingInput */
        private readonly UpdateSettingInput $input,
    ) {
    }

    public function getInput(): UpdateSettingInput
    {
        return $this->input;
    }
}
