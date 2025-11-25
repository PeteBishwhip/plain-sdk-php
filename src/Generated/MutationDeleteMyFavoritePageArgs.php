<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteMyFavoritePageArgs implements MutationDeleteMyFavoritePageArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteMyFavoritePageInput */
        private readonly DeleteMyFavoritePageInput $input,
    ) {
    }

    public function getInput(): DeleteMyFavoritePageInput
    {
        return $this->input;
    }
}
