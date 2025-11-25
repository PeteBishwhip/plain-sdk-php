<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UnarchiveLabelTypeInput implements UnarchiveLabelTypeInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $labelTypeId,
    ) {
    }

    public function getLabelTypeId(): string
    {
        return $this->labelTypeId;
    }
}
