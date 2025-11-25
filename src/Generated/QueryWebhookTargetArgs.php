<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryWebhookTargetArgs implements QueryWebhookTargetArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $webhookTargetId,
    ) {
    }

    public function getWebhookTargetId(): string
    {
        return $this->webhookTargetId;
    }
}
