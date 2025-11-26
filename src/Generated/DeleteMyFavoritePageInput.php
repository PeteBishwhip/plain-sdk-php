<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteMyFavoritePageInput implements DeleteMyFavoritePageInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $favoritePageId,
    ) {
    }

    public function getFavoritePageId(): string
    {
        return $this->favoritePageId;
    }
}
