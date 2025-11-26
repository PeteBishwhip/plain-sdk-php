<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationReorderCustomerCardConfigsArgs implements MutationReorderCustomerCardConfigsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ReorderCustomerCardConfigsInput */
        private readonly ReorderCustomerCardConfigsInput $input,
    ) {
    }

    public function getInput(): ReorderCustomerCardConfigsInput
    {
        return $this->input;
    }
}
