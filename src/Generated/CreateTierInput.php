<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateTierInput implements CreateTierInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $externalId,
        /** @var string */
        private readonly string $color,
        /** @var iterable<int, \Plain\Generated\TierMemberIdentifierInput> */
        private readonly iterable $memberIdentifiers,
        /** @var int|null */
        private readonly int|null $defaultThreadPriority = null,
        /** @var bool|null */
        private readonly bool|null $isDefault = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getDefaultThreadPriority(): int|null
    {
        return $this->defaultThreadPriority;
    }

    public function getMemberIdentifiers(): iterable
    {
        return $this->memberIdentifiers;
    }

    public function getIsDefault(): bool|null
    {
        return $this->isDefault;
    }
}
