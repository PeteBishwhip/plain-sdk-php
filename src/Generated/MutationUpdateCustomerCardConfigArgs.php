<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateCustomerCardConfigArgs implements MutationUpdateCustomerCardConfigArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateCustomerCardConfigInput */
        private readonly UpdateCustomerCardConfigInput $input,
    ) {
    }

    public function getInput(): UpdateCustomerCardConfigInput
    {
        return $this->input;
    }
}
