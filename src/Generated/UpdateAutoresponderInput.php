<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateAutoresponderInput implements UpdateAutoresponderInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $autoresponderId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $order = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $textContent = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $markdownContent = null,
        /** @var \Plain\Generated\BooleanInput|null */
        private readonly BooleanInput|null $isEnabled = null,
        /** @var iterable<int, \Plain\Generated\AutoresponderMessageSource>|null */
        private readonly iterable|null $messageSources = null,
        /** @var iterable<int, \Plain\Generated\AutoresponderConditionInput>|null */
        private readonly iterable|null $conditions = null,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $responseDelaySeconds = null,
    ) {
    }

    public function getAutoresponderId(): string
    {
        return $this->autoresponderId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getOrder(): IntInput|null
    {
        return $this->order;
    }

    public function getTextContent(): StringInput|null
    {
        return $this->textContent;
    }

    public function getMarkdownContent(): OptionalStringInput|null
    {
        return $this->markdownContent;
    }

    public function getIsEnabled(): BooleanInput|null
    {
        return $this->isEnabled;
    }

    public function getMessageSources(): iterable|null
    {
        return $this->messageSources;
    }

    public function getConditions(): iterable|null
    {
        return $this->conditions;
    }

    public function getResponseDelaySeconds(): IntInput|null
    {
        return $this->responseDelaySeconds;
    }
}
