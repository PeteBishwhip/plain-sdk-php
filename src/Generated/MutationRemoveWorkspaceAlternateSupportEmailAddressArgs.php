<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationRemoveWorkspaceAlternateSupportEmailAddressArgs implements MutationRemoveWorkspaceAlternateSupportEmailAddressArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\RemoveWorkspaceAlternateSupportEmailAddressInput */
        private readonly RemoveWorkspaceAlternateSupportEmailAddressInput $input,
    ) {
    }

    public function getInput(): RemoveWorkspaceAlternateSupportEmailAddressInput
    {
        return $this->input;
    }
}
