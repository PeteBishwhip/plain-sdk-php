<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteHelpCenterArticleArgs implements MutationDeleteHelpCenterArticleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteHelpCenterArticleInput */
        private readonly DeleteHelpCenterArticleInput $input,
    ) {
    }

    public function getInput(): DeleteHelpCenterArticleInput
    {
        return $this->input;
    }
}
