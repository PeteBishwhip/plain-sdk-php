<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationStartServiceAuthorizationArgs implements MutationStartServiceAuthorizationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\StartServiceAuthorizationInput */
        private readonly StartServiceAuthorizationInput $input,
    ) {
    }

    public function getInput(): StartServiceAuthorizationInput
    {
        return $this->input;
    }
}
