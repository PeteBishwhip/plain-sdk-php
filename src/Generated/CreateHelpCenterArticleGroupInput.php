<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateHelpCenterArticleGroupInput implements CreateHelpCenterArticleGroupInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterId,
        /** @var string */
        private readonly string $name,
        /** @var string|null */
        private readonly string|null $slug = null,
        /** @var string|null */
        private readonly string|null $parentHelpCenterArticleGroupId = null,
    ) {
    }

    public function getHelpCenterId(): string
    {
        return $this->helpCenterId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string|null
    {
        return $this->slug;
    }

    public function getParentHelpCenterArticleGroupId(): string|null
    {
        return $this->parentHelpCenterArticleGroupId;
    }
}
