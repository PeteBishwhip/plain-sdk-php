<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteHelpCenterArticleGroupArgs implements MutationDeleteHelpCenterArticleGroupArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteHelpCenterArticleGroupInput */
        private readonly DeleteHelpCenterArticleGroupInput $input,
    ) {
    }

    public function getInput(): DeleteHelpCenterArticleGroupInput
    {
        return $this->input;
    }
}
