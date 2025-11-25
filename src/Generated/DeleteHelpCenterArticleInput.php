<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteHelpCenterArticleInput implements DeleteHelpCenterArticleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterArticleId,
    ) {
    }

    public function getHelpCenterArticleId(): string
    {
        return $this->helpCenterArticleId;
    }
}
