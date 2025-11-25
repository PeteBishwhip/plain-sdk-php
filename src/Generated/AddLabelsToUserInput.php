<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AddLabelsToUserInput implements AddLabelsToUserInputInterface
{
    public function __construct(
        /** @var iterable<int, string> */
        private readonly iterable $labelTypeIds,
        /** @var string */
        private readonly string $entityId,
    ) {
    }

    public function getLabelTypeIds(): iterable
    {
        return $this->labelTypeIds;
    }

    public function getEntityId(): string
    {
        return $this->entityId;
    }
}
