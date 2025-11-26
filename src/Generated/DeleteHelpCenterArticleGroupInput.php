<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteHelpCenterArticleGroupInput implements DeleteHelpCenterArticleGroupInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterArticleGroupId,
    ) {
    }

    public function getHelpCenterArticleGroupId(): string
    {
        return $this->helpCenterArticleGroupId;
    }
}
