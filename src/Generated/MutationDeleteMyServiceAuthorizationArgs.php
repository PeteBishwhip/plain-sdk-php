<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteMyServiceAuthorizationArgs implements MutationDeleteMyServiceAuthorizationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteMyServiceAuthorizationInput */
        private readonly DeleteMyServiceAuthorizationInput $input,
    ) {
    }

    public function getInput(): DeleteMyServiceAuthorizationInput
    {
        return $this->input;
    }
}
