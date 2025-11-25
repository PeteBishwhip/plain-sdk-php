<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateMyFavoritePageInput implements CreateMyFavoritePageInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $key,
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }
}
