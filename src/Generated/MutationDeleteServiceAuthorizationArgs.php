<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteServiceAuthorizationArgs implements MutationDeleteServiceAuthorizationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteServiceAuthorizationInput */
        private readonly DeleteServiceAuthorizationInput $input,
    ) {
    }

    public function getInput(): DeleteServiceAuthorizationInput
    {
        return $this->input;
    }
}
