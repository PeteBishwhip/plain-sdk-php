<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateWebhookTargetArgs implements MutationUpdateWebhookTargetArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateWebhookTargetInput */
        private readonly UpdateWebhookTargetInput $input,
    ) {
    }

    public function getInput(): UpdateWebhookTargetInput
    {
        return $this->input;
    }
}
