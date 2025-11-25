<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationResolveCustomerForSlackChannelArgs implements MutationResolveCustomerForSlackChannelArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ResolveCustomerForSlackChannelInput */
        private readonly ResolveCustomerForSlackChannelInput $input,
    ) {
    }

    public function getInput(): ResolveCustomerForSlackChannelInput
    {
        return $this->input;
    }
}
