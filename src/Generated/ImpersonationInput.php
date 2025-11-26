<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ImpersonationInput implements ImpersonationInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CustomerImpersonationInput */
        private readonly CustomerImpersonationInput $asCustomer,
    ) {
    }

    public function getAsCustomer(): CustomerImpersonationInput
    {
        return $this->asCustomer;
    }
}
