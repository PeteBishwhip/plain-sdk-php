<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateCheckoutSessionArgs implements MutationCreateCheckoutSessionArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateCheckoutSessionInput */
        private readonly CreateCheckoutSessionInput $input,
    ) {
    }

    public function getInput(): CreateCheckoutSessionInput
    {
        return $this->input;
    }
}
