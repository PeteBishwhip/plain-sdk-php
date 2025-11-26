<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateWebhookTargetInput implements UpdateWebhookTargetInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $webhookTargetId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $url = null,
        /** @var iterable<int, \Plain\Generated\WebhookTargetEventSubscriptionInput>|null */
        private readonly iterable|null $eventSubscriptions = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isEnabled = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $description = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $version = null,
    ) {
    }

    public function getWebhookTargetId(): string
    {
        return $this->webhookTargetId;
    }

    public function getUrl(): StringInput|null
    {
        return $this->url;
    }

    public function getEventSubscriptions(): iterable|null
    {
        return $this->eventSubscriptions;
    }

    public function getIsEnabled(): BooleanInput|null
    {
        return $this->isEnabled;
    }

    public function getDescription(): StringInput|null
    {
        return $this->description;
    }

    public function getVersion(): StringInput|null
    {
        return $this->version;
    }
}
