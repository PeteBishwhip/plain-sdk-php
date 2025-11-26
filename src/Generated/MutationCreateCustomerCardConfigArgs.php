<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateCustomerCardConfigArgs implements MutationCreateCustomerCardConfigArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateCustomerCardConfigInput */
        private readonly CreateCustomerCardConfigInput $input,
    ) {
    }

    public function getInput(): CreateCustomerCardConfigInput
    {
        return $this->input;
    }
}
