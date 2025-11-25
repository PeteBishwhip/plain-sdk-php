<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertCustomerArgs implements MutationUpsertCustomerArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertCustomerInput */
        private readonly UpsertCustomerInput $input,
    ) {
    }

    public function getInput(): UpsertCustomerInput
    {
        return $this->input;
    }
}
