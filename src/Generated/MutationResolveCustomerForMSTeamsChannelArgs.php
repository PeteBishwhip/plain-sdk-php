<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationResolveCustomerForMSTeamsChannelArgs implements MutationResolveCustomerForMSTeamsChannelArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ResolveCustomerForMSTeamsChannelInput */
        private readonly ResolveCustomerForMSTeamsChannelInput $input,
    ) {
    }

    public function getInput(): ResolveCustomerForMSTeamsChannelInput
    {
        return $this->input;
    }
}
