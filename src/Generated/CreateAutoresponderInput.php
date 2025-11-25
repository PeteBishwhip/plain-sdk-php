<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateAutoresponderInput implements CreateAutoresponderInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var int */
        private readonly int $order,
        /** @var string */
        private readonly string $textContent,
        /** @var bool */
        private readonly bool $isEnabled,
        /** @var iterable<int, \Plain\Generated\AutoresponderMessageSource> */
        private readonly iterable $messageSources,
        /** @var iterable<int, \Plain\Generated\AutoresponderConditionInput> */
        private readonly iterable $conditions,
        /** @var string|null */
        private readonly string|null $markdownContent = null,
        /** @var int|null */
        private readonly int|null $responseDelaySeconds = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getTextContent(): string
    {
        return $this->textContent;
    }

    public function getMarkdownContent(): string|null
    {
        return $this->markdownContent;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getMessageSources(): iterable
    {
        return $this->messageSources;
    }

    public function getConditions(): iterable
    {
        return $this->conditions;
    }

    public function getResponseDelaySeconds(): int|null
    {
        return $this->responseDelaySeconds;
    }
}
