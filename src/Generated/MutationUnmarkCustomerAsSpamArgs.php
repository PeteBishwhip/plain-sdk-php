<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUnmarkCustomerAsSpamArgs implements MutationUnmarkCustomerAsSpamArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UnmarkCustomerAsSpamInput */
        private readonly UnmarkCustomerAsSpamInput $input,
    ) {
    }

    public function getInput(): UnmarkCustomerAsSpamInput
    {
        return $this->input;
    }
}
