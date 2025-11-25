<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateHelpCenterArticleGroupInput implements UpdateHelpCenterArticleGroupInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterArticleGroupId,
        /** @var string|null */
        private readonly string|null $name = null,
    ) {
    }

    public function getHelpCenterArticleGroupId(): string
    {
        return $this->helpCenterArticleGroupId;
    }

    public function getName(): string|null
    {
        return $this->name;
    }
}
