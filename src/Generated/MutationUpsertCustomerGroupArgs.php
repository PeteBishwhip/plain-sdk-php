<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertCustomerGroupArgs implements MutationUpsertCustomerGroupArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertCustomerGroupInput */
        private readonly UpsertCustomerGroupInput $input,
    ) {
    }

    public function getInput(): UpsertCustomerGroupInput
    {
        return $this->input;
    }
}
