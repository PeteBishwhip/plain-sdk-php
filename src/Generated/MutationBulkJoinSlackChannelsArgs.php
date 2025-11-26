<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationBulkJoinSlackChannelsArgs implements MutationBulkJoinSlackChannelsArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\BulkJoinSlackChannelsInput */
        private readonly BulkJoinSlackChannelsInput $input,
    ) {
    }

    public function getInput(): BulkJoinSlackChannelsInput
    {
        return $this->input;
    }
}
