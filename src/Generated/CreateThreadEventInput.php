<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateThreadEventInput implements CreateThreadEventInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $title,
        /** @var iterable<int, \Plain\Generated\EventComponentInput> */
        private readonly iterable $components,
        /** @var string|null */
        private readonly string|null $externalId = null,
        /** @var string|null */
        private readonly string|null $timestamp = null,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getExternalId(): string|null
    {
        return $this->externalId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getComponents(): iterable
    {
        return $this->components;
    }

    public function getTimestamp(): string|null
    {
        return $this->timestamp;
    }
}
