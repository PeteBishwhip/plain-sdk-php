<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationAddWorkspaceAlternateSupportEmailAddressArgs implements MutationAddWorkspaceAlternateSupportEmailAddressArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\AddWorkspaceAlternateSupportEmailAddressInput */
        private readonly AddWorkspaceAlternateSupportEmailAddressInput $input,
    ) {
    }

    public function getInput(): AddWorkspaceAlternateSupportEmailAddressInput
    {
        return $this->input;
    }
}
