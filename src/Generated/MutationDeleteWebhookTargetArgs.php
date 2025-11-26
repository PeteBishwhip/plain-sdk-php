<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWebhookTargetArgs implements MutationDeleteWebhookTargetArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWebhookTargetInput */
        private readonly DeleteWebhookTargetInput $input,
    ) {
    }

    public function getInput(): DeleteWebhookTargetInput
    {
        return $this->input;
    }
}
