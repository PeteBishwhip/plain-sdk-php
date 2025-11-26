<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class HelpCenterIndexItemInput implements HelpCenterIndexItemInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\HelpCenterIndexItemType */
        private readonly HelpCenterIndexItemType $type,
        /** @var string */
        private readonly string $entityId,
        /** @var string|null */
        private readonly string|null $parentId = null,
    ) {
    }

    public function getType(): HelpCenterIndexItemType
    {
        return $this->type;
    }

    public function getEntityId(): string
    {
        return $this->entityId;
    }

    public function getParentId(): string|null
    {
        return $this->parentId;
    }
}
