<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertHelpCenterArticleArgs implements MutationUpsertHelpCenterArticleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertHelpCenterArticleInput */
        private readonly UpsertHelpCenterArticleInput $input,
    ) {
    }

    public function getInput(): UpsertHelpCenterArticleInput
    {
        return $this->input;
    }
}
