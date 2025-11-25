<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateThreadInput implements CreateThreadInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CustomerIdentifierInput */
        private readonly CustomerIdentifierInput $customerIdentifier,
        /** @var string|null */
        private readonly string|null $title = null,
        /** @var iterable<int, \Plain\Generated\ComponentInput>|null */
        private readonly iterable|null $components = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $attachmentIds = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $labelTypeIds = null,
        /** @var iterable<int, \Plain\Generated\CreateThreadFieldOnThreadInput>|null */
        private readonly iterable|null $threadFields = null,
        /** @var \Plain\Generated\CreateThreadAssignedToInput|null */
        private readonly CreateThreadAssignedToInput|null $assignedTo = null,
        /** @var string|null */
        private readonly string|null $externalId = null,
        /** @var string|null */
        private readonly string|null $description = null,
        /** @var int|null */
        private readonly int|null $priority = null,
        /** @var \Plain\Generated\TenantIdentifierInput|null */
        private readonly TenantIdentifierInput|null $tenantIdentifier = null,
        /** @var \Plain\Generated\ThreadChannel|null */
        private readonly ThreadChannel|null $channel = null,
        /** @var \Plain\Generated\ThreadChannelDetailsInput|null */
        private readonly ThreadChannelDetailsInput|null $channelDetails = null,
    ) {
    }

    public function getCustomerIdentifier(): CustomerIdentifierInput
    {
        return $this->customerIdentifier;
    }

    public function getTitle(): string|null
    {
        return $this->title;
    }

    public function getComponents(): iterable|null
    {
        return $this->components;
    }

    public function getAttachmentIds(): iterable|null
    {
        return $this->attachmentIds;
    }

    public function getLabelTypeIds(): iterable|null
    {
        return $this->labelTypeIds;
    }

    public function getThreadFields(): iterable|null
    {
        return $this->threadFields;
    }

    public function getAssignedTo(): CreateThreadAssignedToInput|null
    {
        return $this->assignedTo;
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getPriority(): int|null
    {
        return $this->priority;
    }

    public function getTenantIdentifier(): TenantIdentifierInput|null
    {
        return $this->tenantIdentifier;
    }

    public function getChannel(): ThreadChannel|null
    {
        return $this->channel;
    }

    public function getChannelDetails(): ThreadChannelDetailsInput|null
    {
        return $this->channelDetails;
    }
}
