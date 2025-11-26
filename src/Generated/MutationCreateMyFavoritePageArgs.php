<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateMyFavoritePageArgs implements MutationCreateMyFavoritePageArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateMyFavoritePageInput */
        private readonly CreateMyFavoritePageInput $input,
    ) {
    }

    public function getInput(): CreateMyFavoritePageInput
    {
        return $this->input;
    }
}
