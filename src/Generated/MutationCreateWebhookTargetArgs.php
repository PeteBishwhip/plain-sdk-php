<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWebhookTargetArgs implements MutationCreateWebhookTargetArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWebhookTargetInput */
        private readonly CreateWebhookTargetInput $input,
    ) {
    }

    public function getInput(): CreateWebhookTargetInput
    {
        return $this->input;
    }
}
