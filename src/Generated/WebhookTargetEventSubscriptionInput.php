<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class WebhookTargetEventSubscriptionInput implements WebhookTargetEventSubscriptionInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $eventType,
    ) {
    }

    public function getEventType(): string
    {
        return $this->eventType;
    }
}
