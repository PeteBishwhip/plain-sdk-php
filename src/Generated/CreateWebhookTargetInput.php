<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateWebhookTargetInput implements CreateWebhookTargetInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $url,
        /** @var iterable<int, \Plain\Generated\WebhookTargetEventSubscriptionInput> */
        private readonly iterable $eventSubscriptions,
        /** @var bool */
        private readonly bool $isEnabled,
        /** @var string */
        private readonly string $description,
        /** @var string|null */
        private readonly string|null $version = null,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getEventSubscriptions(): iterable
    {
        return $this->eventSubscriptions;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getVersion(): string|null
    {
        return $this->version;
    }
}
