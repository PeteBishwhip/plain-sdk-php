<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCompleteServiceAuthorizationArgs implements MutationCompleteServiceAuthorizationArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CompleteServiceAuthorizationInput */
        private readonly CompleteServiceAuthorizationInput $input,
    ) {
    }

    public function getInput(): CompleteServiceAuthorizationInput
    {
        return $this->input;
    }
}
