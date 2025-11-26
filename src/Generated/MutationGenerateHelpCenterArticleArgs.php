<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationGenerateHelpCenterArticleArgs implements MutationGenerateHelpCenterArticleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\GenerateHelpCenterArticleInput */
        private readonly GenerateHelpCenterArticleInput $input,
    ) {
    }

    public function getInput(): GenerateHelpCenterArticleInput
    {
        return $this->input;
    }
}
