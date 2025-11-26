<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateHelpCenterArticleGroupArgs implements MutationUpdateHelpCenterArticleGroupArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateHelpCenterArticleGroupInput */
        private readonly UpdateHelpCenterArticleGroupInput $input,
    ) {
    }

    public function getInput(): UpdateHelpCenterArticleGroupInput
    {
        return $this->input;
    }
}
