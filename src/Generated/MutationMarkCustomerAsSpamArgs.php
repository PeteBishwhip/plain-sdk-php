<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationMarkCustomerAsSpamArgs implements MutationMarkCustomerAsSpamArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\MarkCustomerAsSpamInput */
        private readonly MarkCustomerAsSpamInput $input,
    ) {
    }

    public function getInput(): MarkCustomerAsSpamInput
    {
        return $this->input;
    }
}
