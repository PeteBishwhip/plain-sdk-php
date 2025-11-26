<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateCustomerEventArgs implements MutationCreateCustomerEventArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateCustomerEventInput */
        private readonly CreateCustomerEventInput $input,
    ) {
    }

    public function getInput(): CreateCustomerEventInput
    {
        return $this->input;
    }
}
