<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TenantFieldSchemaInput implements TenantFieldSchemaInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $source,
        /** @var string */
        private readonly string $externalFieldId,
        /** @var string */
        private readonly string $label,
        /** @var \Plain\Generated\TenantFieldType */
        private readonly TenantFieldType $type,
        /** @var bool */
        private readonly bool $isVisible,
        /** @var int */
        private readonly int $order,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $options = null,
    ) {
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getExternalFieldId(): string
    {
        return $this->externalFieldId;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getType(): TenantFieldType
    {
        return $this->type;
    }

    public function getOptions(): iterable|null
    {
        return $this->options;
    }

    public function getIsVisible(): bool
    {
        return $this->isVisible;
    }

    public function getOrder(): int
    {
        return $this->order;
    }
}
