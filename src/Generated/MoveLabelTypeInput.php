<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MoveLabelTypeInput implements MoveLabelTypeInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $labelTypeId,
        /** @var string|null */
        private readonly string|null $afterLabelTypeId = null,
        /** @var string|null */
        private readonly string|null $beforeLabelTypeId = null,
        /** @var string|null */
        private readonly string|null $parentLabelTypeId = null,
    ) {
    }

    public function getLabelTypeId(): string
    {
        return $this->labelTypeId;
    }

    public function getAfterLabelTypeId(): string|null
    {
        return $this->afterLabelTypeId;
    }

    public function getBeforeLabelTypeId(): string|null
    {
        return $this->beforeLabelTypeId;
    }

    public function getParentLabelTypeId(): string|null
    {
        return $this->parentLabelTypeId;
    }
}
