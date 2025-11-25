<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateHelpCenterArticleGroupArgs implements MutationCreateHelpCenterArticleGroupArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateHelpCenterArticleGroupInput */
        private readonly CreateHelpCenterArticleGroupInput $input,
    ) {
    }

    public function getInput(): CreateHelpCenterArticleGroupInput
    {
        return $this->input;
    }
}
