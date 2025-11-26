<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryHelpCenterArticleBySlugArgs implements QueryHelpCenterArticleBySlugArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterId,
        /** @var string */
        private readonly string $slug,
    ) {
    }

    public function getHelpCenterId(): string
    {
        return $this->helpCenterId;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
